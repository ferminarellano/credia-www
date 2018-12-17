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
            'foto' => 'nullable|max:1024',
            'titulo' => 'required',
            'descripcion' => 'required',
            'contenido' => 'required',
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
			'foto.max' => 'El tamaño de la fotografía no es valido. Máximo 1MB.',
			'titulo.required' => 'Necesita agregar el título de la actividad.',
			'descripcion.required' => 'Necesita agregar la descripción de la actividad.',
			'contenido.required' => 'Necesita agregar el contenido de la actividad.',
        ];
    }
}
