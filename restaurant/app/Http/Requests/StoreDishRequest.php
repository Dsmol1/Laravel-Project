<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
     public function rules(){
           return [
             'title' => 'required',
             'description' => 'required',
             'price' => 'required',
             'image' => 'required',
             'main_id' => 'required'
           ];
       }
       public function messages(){
         return[
           'title.required' => 'Prašome įvesti patiekalo pavadinimą.',
           'description.required' => 'Prašome įvesti aprašymą.',
           'price.required' => 'Prašome įvesti kainą.',
           'image.required' => 'Prašome įvesti nuotraukos URL.',
           'main_id.required' => 'Prašome pasirinkti produkto sekciją.'
         ];
       }
   }
