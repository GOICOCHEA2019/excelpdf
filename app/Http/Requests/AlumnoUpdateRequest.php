<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoUpdateRequest extends FormRequest
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
            'dni' => ['required', 'numeric', 'digits:8', 'unique:alumnos,dni,'.$this->route('alumno')],
            'nombres' => ['required'],
            'correo' => ['required'],
        ];
    }
}
