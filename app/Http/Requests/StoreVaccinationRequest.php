<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVaccinationRequest extends FormRequest
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
            'user_id' => 'required|max:2',
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'frequency'=> 'required',
            'previous_date' => 'required|before:today',
            'next_date' => 'required|after:today',

        ];
    }
}
