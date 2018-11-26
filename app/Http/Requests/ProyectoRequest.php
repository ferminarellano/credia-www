<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
{

    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'foto' => 'nullable|image|max:1024',
            'titulo' => 'required|min:5|max:255',
            'subtitulo' => 'required|min:5|max:255',
			'contenido' => 'required',
			'fecha_convenio' => 'required|date',
			'presupuesto' => 'numeric',
			'utilizado' => 'numeric',
			'categoria_id' => 'required',
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
            'titulo.required' => 'Es necesario agregar el título del artículo.',
            'titulo.min' => 'La cantidad mínima para el título es de: 5 caracteres.',
			'titulo.max' => 'La cantidad máxima para el título es de: 255 caracteres.',
			'subtitulo.required' => 'Es necesario agregar el título del artículo.',
            'subtitulo.min' => 'La cantidad mínima para el título es de: 5 caracteres.',
			'subtitulo.max' => 'La cantidad máxima para el título es de: 255 caracteres.',
			'contenido.required' => 'Es necesario agregar el contenido principal del evento.',
			'fecha_convenio.required' => 'Es necesario agregar la fecha del evento.',
			'fecha_convenio.date' => 'Es necesario que sea en formato de fecha.',
			'presupuesto.numeric' => 'Es necesario que solo se ingresen numeros.',
			'utilizado.numeric' => 'Es necesario que solo se ingresen numeros.',
			'categoria_id.required' => 'Es necesario seleccionar la categoría a la que pertenece el proyecto.',
        ];
    }
}