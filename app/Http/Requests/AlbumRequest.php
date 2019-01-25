<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
			'nombre' => 'required|min:5|max:255',
			'descripcion' => 'required|max:400',
			'fecha' => 'required|date',
			'cover' => 'nullable|image|max:1024',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
			'nombre.required' => 'Es necesario agregar el nombre del álbum.',
            'nombre.min' => 'La cantidad mínima para el nombre es de: 5 caracteres.',
			'nombre.max' => 'La cantidad máxima para el nombre es de: 255 caracteres.',
			'descripcion.required' => 'Es necesario agregar la descripción del álbum.',
			'descripcion.max' => 'La cantidad máxima para la descripción es de: 400 caracteres.',
			'fecha.required' => 'Es necesario agregar la fecha para el álbum.',
			'fecha.date' => 'Es necesario que sea en formato de fecha.',
			'cover.image' => 'El archivo seleccionado debe ser una imagen.',
			'cover.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
        ];
    }
}
