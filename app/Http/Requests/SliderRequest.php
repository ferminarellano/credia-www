<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{

    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
			'foto' => 'image|max:5120',
			'indicador' => 'required',
			'secuencia' => 'required',
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
			'foto.max' => 'El tamaño de la fotografía no es valido. Máximo 5MB.',
			'indicador.required' => 'Es necesario seleccionar a que página pertenece la fotografía.',
			'secuencia.required' => 'Es necesario agregar el número de secuencia de la fotografía.',
        ];
    }
}
