<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class DescargaRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'descripcion' => 'nullable|max:400',
			'archivos' => 'nullable|max:1024',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'descripcion.max' => 'La cantidad máxima para la descripción es de: 400 caracteres.',
			'archivos.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
        ];
    }
}
