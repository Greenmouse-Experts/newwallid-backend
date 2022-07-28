<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdManagementRequest extends FormRequest
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
            // 'organization_id' => 'required|string',
            'name' => 'required|string',
            'issued_date'=>'required|date',
            // 'role' => 'required|string',
            'passport' =>'required|mimes:jpeg,png,jpg',
        ];
    }
}
