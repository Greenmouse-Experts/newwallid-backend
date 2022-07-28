<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SubscriptionRequest extends \App\Http\Requests\BaseCustomRequest
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
            'name' => 'required',
            'name' => [
                'required',
                // Rule::unique('subscriptions')->ignore($this->id, 'id'),

                Rule::unique('subscriptions', 'name')->where(function ($query) {
                    return $query->where('organization_id', Auth::user()->organization->id);
                })->ignore($this->id, 'id')
            ],
            'price'=>'required',
            'validity'=>'required|numeric',
        ];
    }
}
