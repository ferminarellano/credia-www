<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCommentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'nombre'		=>  'required|max:100',
           'correo'		=>  'required|email|max:100',
           'comentario'	=>  'required|min:5|max:2000',
        ];
    }
	
	public function messages()
	{
		return [
			'nombre.required' => 'Debes agregar tu nombre.',
			'nombre.max' =>'El nombre no puede ser mayor a 100 caracteres.',
			'correo.required' => 'Debes agregar tu correo electrónico.',
			'correo.email' => 'Debe ser un correo Ej: ejemplo@gmail.com .',
			'correo.max' => 'El correo no puede ser mayor a 100 caracteres.',
			'comentario.required' => 'Debes agregar un comentario.',
			'comentario.min' => 'El comentario no puede ser menor a 5 caracteres.',
			'comentario.max' => 'El comentario no puede ser mayor a 2000 caracteres.',
		];
	}
}
