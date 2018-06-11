<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationValidation extends FormRequest
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
          'surname' => 'required',
          'email' => 'required',
          'people' => 'required',
          'phone' => 'required',
          'date' => 'required',
          'time' => 'required'

        ];
    }

    public function messages(){
      return[
        'name.required' => 'Prašome įvesti vardą.',
        'surname.required' => 'Prašome įvesti pavardę.',
        'email.required' => 'Prašome įvesti el.paštą',
        'phone.required' => 'Prašome įvesti telefono numerį',
        'date.required' => 'Prašome įvesti datą.',
        'time.required' => 'Prašome įvesti laiką.'
      ];
    }
}
