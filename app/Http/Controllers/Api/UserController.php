<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function trips(Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        $collection = $user->trips()->with('user.image', 'passenger.image')->get();

        return response()->success($collection);
    }
}
