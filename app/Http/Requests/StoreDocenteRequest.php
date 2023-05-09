<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocenteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=>'required',
            'nombre_de_usuario' =>'required',
            'clave'=>'confirmed|min:5'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'El nombre es requerido',
            'nombre_de_usuario.required' =>'El nombre es requerido',
            'clave.confirmed'=>'Las contraseñas no coinciden',
            'clave.min'=>'Las contraseñas deben tener al menos :min  caracteres'
        ];
    }
}
