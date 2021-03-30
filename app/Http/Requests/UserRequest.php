<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required|string|max:100|min:3',
            'username' => 'required|unique:users,username|max:100|min:3',
            'password' => [
                'required',
                'required_with:password_confirmation',
                'string',
                'max:100',
                'min:8',             // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            //'password' => 'required|string|required_with:password_confirmation|max:100|min:8|confirmed',
            'email'    => 'required|email|unique:users,email',
            'avatar'   => 'sometimes|nullable|mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'required'          => 'This field is required',
            'max'               => 'This field is very long',
            'min'               => 'This field is very small',
            'password.regex'    => 'Password must contain at least 8 characters & one lowercase letter & one uppercase latter & one digit & one special character',
            'email.email'       => 'Email incorrect',
            'fullname.string'   => 'Full name must have alphabetic caracters',
            'username.unique'   => 'Username is already exist',
            'email.unique'      => 'Email is already exist',
            'avatar.mimes'      => 'Extension must be jpg or png',
        ];
    }
}
