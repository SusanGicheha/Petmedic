<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
            'email_address' => 'required',
            'user_id' => 'required',
            'phone_number' => 'required|numeric',
            'date_time' => 'required|after:today',
            'pet_name' => 'required',

        ];
    }
}
