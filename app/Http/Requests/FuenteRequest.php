<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class FuenteRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'fuente' => 'required',
            'institucion_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'fuente.required' => 'Es necesario agregar el nombre de la fuente.',
            'institucion_id.required' => 'Es necesario seleccionar a que institución pertenece la fuente.',
        ];
    }
}
