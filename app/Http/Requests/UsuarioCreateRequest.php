<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
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
            'nombre'=>'required|alpha|min:4|max:255',
            'apellido'=>'required|alpha|min:4|max:255',
            'telefono'=> 'integer|numeric|nullable',
            'direccion'=> 'required|min:6|max:255' ,
            'email'=>'required|email:rfc|unique:App\Usuario,email',
        ];
    }

    public function attributes()
    {
        return [
            'nombre'=>'Nombre',
            'apellido'=>'Apellido',
            'telefono'=> 'Teléfono',
            'direccion'=> 'Dirección' ,
            'email'=>'Correo electrónico',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'El :attribute es requerido',
            'nombre.min'=>'El :attribute debe contener más de 4 caracteres',
            'nombre.max'=>'El :attribute no puede contener mas de 255 caracteres',
            'nombre.alpha'=>'El :attribute debe contener unicamente letras',
            'apellido.required'=>'El :attribute es requerido',
            'apellido.min'=>'El :attribute debe contener más de 4 caracteres',
            'apellido.max'=>'El :attribute no puede contener mas de 255 caracteres',
            'apellido.alpha'=>'El :attribute debe contener unicamente letras',
            'telefono.integer'=> 'El :attribute debe ser un entero',
            'telefono.numeric'=> 'El :attribute debe ser solo numerico',
            'direccion.required'=> 'La :attribute es requerida' ,
            'direccion.min'=> 'La :attribute debe contener por lo menos 6 caracteres' ,
            'direccion.max'=> 'La :attribute no puede contener mas de 255 caracteres' ,
            'email.required'=>'El :attribute es requerido',
            'email.email'=>'El :attribute no cumple con el formato',
            'email.unique'=>'El :attribute ya existe',
        ];
    }
}
