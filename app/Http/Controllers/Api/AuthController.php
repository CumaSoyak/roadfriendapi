<?php
namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\VerifyRequest;
use App\Models\Contract;
use App\Models\Device;
use App\Models\GsmVerify;
use App\Models\PasswordReset;
use App\Models\Social;
use App\Models\Image;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $contracts = Contract::all();
        $data = [
            'contracts'     => $contracts,
        ];
        return response()->success($data);
    }

    /**
     * Register api
     *
     * @param RegisterRequest $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = new User($request->input());
        $user->password = $request->input('password');
        $user->save();

        if($request->hasFile('image')) {
            $user->image()->delete();

            $user->image()->save(new Image([
                'image' => $request->file('image'),
            ]));
        }

        $user = User::query()->find($user->id);

        $provider   = $request->input('provider') ?? null;
        $token      = $request->input('token') ?? null;
        if ($provider && $token) {
            try {
                /** @var \Laravel\Socialite\AbstractUser $socialUser */
                if ($provider == 'facebook') {
                    $socialUser = Socialite::driver($provider)
                        ->scopes(['email', 'user_gender', 'user_birthday'])
                        ->fields(['name', 'email', 'birthday', 'verified'])
                        ->userFromToken($token);
                } elseif ($provider == 'google') {
                    /** @var GoogleProvider $socialite */
                    $socialUser = Socialite::driver($provider)
                        ->userFromToken($token);

                } elseif ($provider == 'googleid') {
                    /** @var GoogleIdProvider $socialite */
                    $socialUser = Socialite::driver($provider)
                        ->userFromToken($token);
                    $provider = 'google';
                } else {
                    throw new \Exception();
                }


                // Attach social profile
                $social = new Social([
                    'provider'      => $provider,
                    'provider_id'   => $socialUser->getId(),
                    'access_token'  => $token,
                ]);
                $social->user()->associate($user);
                $social->save();


            } catch (\Exception $e) {
                // Ignore error
            }
        }//if ($provider && $token)

        $user = $user->fresh('image');

        return response()->success(['token' => auth('api')->login($user), 'user' => $user]);
    }

    /**
     * @param Request $request
     * @param $provider
     * @return \Illuminate\Http\JsonResponse
     */
    public function social(Request $request, $provider)
    {
        $token = $request->input('token');
        try {
            /** @var \Laravel\Socialite\AbstractUser $socialUser */
            if ($provider == 'facebook') {
                $socialUser = Socialite::driver($provider)
                    ->scopes(['email', 'user_gender', 'user_birthday'])
                    ->fields(['name', 'email', 'birthday', 'verified'])
                    ->userFromToken($token);
            } elseif ($provider == 'google') {
                /** @var GoogleProvider $socialite */
                $socialUser = Socialite::driver($provider)
                    ->userFromToken($token);

            } elseif ($provider == 'googleid') {
                /** @var GoogleIdProvider $socialite */
                $socialUser = Socialite::driver($provider)
                    ->userFromToken($token);
                $provider = 'google';
            } else {
                throw new \Exception();
            }
        } catch (\Exception $e) {
            return response()->error('auth.social.invalid');
        }

        // If users email address already registered
        $user = User::query()
            ->with('image')
            ->where('email', $socialUser->getEmail())
            ->first();

        if ($user) {
            $social = new Social([
                'provider'     => $provider,
                'provider_id'  => $socialUser->getId(),
                'access_token' => $token,
            ]);
            $social->user()->associate($user);
            $social->save();

            return response()->success(['token' => auth('api')->login($user), 'user' => $user]);
        }

        // If already logged in before
        $social = Social::whereProvider($provider)->whereProviderId($socialUser->getId())->first();
        if ($social) {
            // Update Token
            $social->access_token = $token;
            $social->save();

            return response()->success(['token' => auth('api')->login($user), 'user' => $user]);
        }

        // Check Required fields
        $email      = $socialUser->getEmail();
        $name       = $socialUser->getName();
        $gsm        = null;
        $gender     = null;
        $birthDate  = null;


        if (!$email || !$name) {
            return response()->json([
                'code'    => 'auth.social.missing',
                'message' => trans('errors.auth.social.missing'),
                'user'    => [
                    'token' => $token,
                    'email' => $email,
                    'name'  => $name,
                ],
            ], 400);
        }

        if (!$user) {
            $user = new User([
                'full_name'     => $name,
                'email'         => $email,
                'gender'        => $gender,
                'birth_date'    => $birthDate,
            ]);
            $user->save();
        }

        $social = new Social([
            'provider'     => $provider,
            'provider_id'  => $socialUser->getId(),
            'access_token' => $token,
        ]);
        $social->user()->associate($user);
        $social->save();

        $jwtToken = auth('api')->login($user);

        $data["token"] = $jwtToken;
        $data["user"] = $user;

        return response()->success($data);
    }

    /**
     * login api
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->error('auth.invalid');
        }

        /** @var User $user */
        $user = Auth::guard('api')->user();

        if (! $user) {
            return response()->error('auth.invalid');
        }

        return response()->success(['token' => $token, 'user' => $user]);
    }

    /**
     * @param ForgotRequest $request
     * @return mixed
     */
    public function forgot(ForgotRequest $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            return response()->error('auth.forgot.invalid');
        }

        PasswordReset::create([
            'email'   => $user->email,
            'user_id' => $user->id,
        ]);

        return response()->message('auth.forgot');
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = $request->user();

        auth('api')->logout();

        return response()->message('auth.logout');
    }

    /**
     * @param $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken(User $user, $token)
    {
        $token = auth('api')->login($user);
        $user->load('image');

        return [
            'token' => $token,
            'user' => $user,
        ];
    }

}