<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterOrgRequest extends \App\Http\Requests\BaseCustomRequest
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
            'name' => 'required|string|unique:organizations',
            'phone' => 'required|unique:organizations',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'name.unique' => 'This user already exists. Kindly sign in or use the forgot password feature.',
        ];
    }
}
