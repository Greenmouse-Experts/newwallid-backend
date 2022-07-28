<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdRequest extends \App\Http\Requests\BaseCustomRequest
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
            'name' => 'required|string',
            'issued_date'=>'required|date',
            'expiry_date'=>'required|date',
            'template_name' =>'required|string',
            'image' =>'required',
            'role' =>'required|string',
            'category' =>'required|string',
            'layout' =>'required',
        ];
    }
}
