<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class SistemaRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'foto' => 'nullable|image|max:1024',
			'fotos' => 'nullable|max:1024',
            'texto_mini' => 'required',
            'nombre_sistema' => 'required',
            'descripcion' => 'required',
			'url' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
			'foto.image' => 'El archivo seleccionado debe ser una imagen.',
			'foto.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
			'fotos.max' => 'El tamaño de cada fotografía no es valido. Máximo 1MB c/u.',
			'texto_mini.required' => 'Es necesario agregar el nombre de biblioteca.',
			'nombre_sistema.required' => 'Es necesario agregar el nombre del sistema.',
			'descripcion.required' => 'Es necesario agregar la descripción del sistema.',
			'url.required' => 'Es necesario agregar la url de redireccionamiento del sistema.',
        ];
    }
}
