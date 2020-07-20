<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'login' => 'required|alpha_dash|unique:users|min:3|max:16',
            'email' => 'required|alpha_dash|unique:users|email|max:32',
            'password' => 'required|confirmed|min:6',
        ];
    }
}
