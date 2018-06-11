<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationValidtaion extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
          'password' => 'required',
          'country' => 'required',
          'city' => 'required',
          'address' => 'required',
          'zip_code'=> 'required'
          'date_of_birth' => 'required',
          'phone_number' => 'required'
        ];
    }

    public function messages(){
      return[
        'name.required' => 'Prašome įvesti vardą.',
        'surname.required' => 'Prašome įvesti pavardę.',
        'email.required' => 'Prašome įvesti el.paštą',
        'password.required' => 'Prašome įvesti salptažodį.',
        'country.required' => 'Prašome įvesti šalį.',
        'city.required' => 'Prašome įvesti miestą',
        'address.required' => 'Prašome įvesti adresą',
        'zip_code.required' => 'Prašome įvesti pašto kodą ',
        'date_of_birth.required' => 'Prašome įvesti gimimo datą',
        'phone_number.required' => 'Prašome įvesti telefono numerį'
      ];
    }
}
