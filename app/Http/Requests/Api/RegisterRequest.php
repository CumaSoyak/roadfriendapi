<?php

namespace App\Http\Requests\Api;

class RegisterRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'full_name'     => 'required',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|min:6',
        ];
    }

    public function attributes()
    {
        return [
            'full_name'  => trans('models.user.full_name'),
            'email'      => trans('models.user.email'),
            'password'   => trans('models.user.password'),
        ];
    }
}
