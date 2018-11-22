<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
			'foto' => 'nullable|image|max:1024',
            'titulo' => 'required|min:5|max:255',
            'fecha' => 'required|date',
            'contenido_1' => 'required',
            'categoria_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Es necesario agregar el título del artículo.',
            'titulo.min' => 'La cantidad mínima para el título es de: 5 caracteres.',
			'titulo.max' => 'La cantidad máxima para el título es de: 255 caracteres.',
			'foto.image' => 'El archivo seleccionado debe ser una imagen.',
			'foto.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
			'fecha.required' => 'Es necesario agregar la fecha del artículo.',
			'fecha.date' => 'Es necesario que sea en formato de fecha.',
			'contenido_1.required' => 'Es necesario agregar el contenido principal del artículo.',
			'categoria_id.required' => 'Es necesario seleccionar la categoría a la que pertenece el artículo.',
        ];
    }
}
