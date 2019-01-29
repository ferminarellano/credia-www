<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class FotoRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
			'album_id' => 'required',
			'descripcion' => 'nullable|max:400',
			'fotos' => 'nullable|max:1024',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
			'album_id.required' => 'Es necesario seleccionar a que álbum pertenecen las fotografías.',
			'descripcion.max' => 'La cantidad máxima para la descripción es de: 400 caracteres.',
			'fotos.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
        ];
    }
}
