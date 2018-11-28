<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class DataIndicadorRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'indicador_id' => 'required',
            'fecha_inicio' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'indicador_id.required' => 'Es necesario seleccionar el indicador.',
            'fecha_inicio.required' => 'Es necesario seleccionar la fecha de inicio.',
        ];
    }
}
