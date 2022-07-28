<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends \App\Http\Requests\BaseCustomRequest
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
            'type' => 'required|string',
            'venue' => 'required|string',
            'venue_image' => 'required',
            'image' => 'required',
            'isFree' => 'required',
            'price' => 'numeric',
            'pricing' => 'nullable',
            'tickets' => 'required|integer',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'category_id' => 'required|numeric',
            'ticketCategories' => 'required_if:pricing,multiple',
            'description' => 'required',
        ];
    }
}
