<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ActividadRequest extends FormRequest
{
    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'actividad' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'actividad.required' => 'Necesita agregar el nombre de la actividad.',
        ];
    }
}
