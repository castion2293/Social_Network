<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'email' => 'email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'email.email' => '不是Email',
            'email.unique' => 'Email已經有人註冊了',
            'first_name.required'  => '請填入你的名子',
            'first_name.max' => '名稱過長',
            'password.required' => '請填入密碼',
            'password.min' => '密碼過短',
        ];
    }
}
