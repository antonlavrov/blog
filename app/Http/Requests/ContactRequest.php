<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'firstName'=>'required|max:20',
            'lastName'=>'required|max:30',
            'email'=>'required|email',

        ];
    }


    public function messages()
    {
        return [
            //
           'firstName.required'=>'Поле :attribute обязательно к заполнению!',
            'lastName.required'=>'Поле :attribute обязательно к заполнению!',

            'email.required'=>'Поле :attribute обязательно к заполнению!',
            'email.email'=>'Поле :attribute должно являться email адресом(Mail@Mail.ru)!'
        ];
    }
}
