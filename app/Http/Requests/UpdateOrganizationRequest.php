<?php

namespace App\Http\Requests;

use App\Models\Organization;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateOrganizationRequest extends \App\Http\Requests\BaseCustomRequest
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
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        return [
            'name' => 'required|string|unique:organizations,name,'.$organization->id,
            'image' => 'nullable'
        ];
    }
}
