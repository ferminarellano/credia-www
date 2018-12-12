<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
{

    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
           'foto' => 'nullable|image|max:1024',
		   'nombre' => 'required',
           'cargo' => 'required',
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
			'nombre.required' => 'Es necesario agregar el nombre del empleado.',
			'cargo.required' => 'Es necesario agregar el cargo del empleado.',
        ];
    }
}
