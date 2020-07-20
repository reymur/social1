<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserProfileEditRequest extends FormRequest
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
            'login' => [
                'alpha_dash',
                'min:6',
                'max:32',
                'required',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],
            'email' => [
                'email',
                'min:6',
                'max:32',
                'required',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],
//            'first_name' => 'string|min:3|max:20',
//            'last_name' => 'string|min:3|max:20',
//            'location' => 'string|max:20',
        ];
    }
}
