<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class MemberRequest extends \App\Http\Requests\BaseCustomRequest
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
        $user_type = Auth::user()->type;
        return [

            'individual_id' => "required_if:$user_type,==,organization",
            'subscription_id' => 'required|integer',
            'amount_paid' => 'required',

        ];
    }

    public function messages(){
        return [
            'individual_id.unique'=> 'This user has already been added as a member'
        ];
    }
}
