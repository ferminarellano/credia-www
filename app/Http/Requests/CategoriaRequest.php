<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
        ];
    }
 
    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Es necesario agregar el nombre de la categoría.',
            'descripcion.required' => 'Es necesario agregar la descripción de la categoría.',
        ];
    }
}
