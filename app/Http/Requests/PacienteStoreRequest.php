<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteStoreRequest extends FormRequest
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
        return ['nombre'=>['required','max:100', 'regex:/^[a-zA-Z ]+$/'],
            'apellido'=>['required','max:100', 'regex:/^[a-zA-Z ]+$/'],
            'email'=>['required','max:100'],
            'dni'=>['required','regex:/[0-9]+/','max:8','min:8'],
            'celular'=>['required','regex:/[0-9]+/','max:20','min:9']
            //
        ];
    }
}
