<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{

    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'pregunta' => 'required',
            'respuesta' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
			'pregunta.required' => 'Es necesario agregar la pregunta.',
			'respuesta.required' => 'Es necesario agregar la respuesta de la pregunta.',
        ];
    }
}
