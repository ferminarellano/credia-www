<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class PatrocinadorRequest extends FormRequest
{

    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'foto' => 'nullable|image|max:1024',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Es necesario agregar el nombre de patrocinador.',
			'foto.image' => 'El archivo seleccionado debe ser una imagen.',
			'foto.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
        ];
    }
}
