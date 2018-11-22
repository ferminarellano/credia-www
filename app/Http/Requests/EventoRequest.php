<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
			'organizador' => 'required',
			'fecha' => 'required|date',
			'horaInicio' => 'required',
			'horaFinal' => 'required',
			'direccion' => 'required',
			'telefono' => 'numeric',
			'correo' => 'required|email',
			'latitud' => 'required',
			'longitud' => 'required',
			
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
			'organizador.required' => 'Es necesario agregar el nombre del organizador evento.',
			'fecha.required' => 'Es necesario agregar la fecha del evento.',
			'fecha.date' => 'Es necesario que sea en formato de fecha.',
			'horaInicio.required' => 'Es necesario agregar la hora de inicio del evento.',
			'horaFinal.required' => 'Es necesario agregar la hora de finalización del evento.',	
			'direccion.required' => 'Es necesario agregar la dirección del evento.',
			'telefono.required' => 'Es necesario agregar télefono de contacto para el evento.',
			'correo.required' => 'Es necesario agregar el correo de contacto para el evento.',
			'correo.email' => 'Es necesario que sea un correo. ** Ejemplo: ejemplo@example.com',
			'latitud.required' => 'Es necesario agregar la laitud de ubicación del evento.',
			'longitud.required' => 'Es necesario agregar la longitud de ubicación del evento.',
        ];
    }
}
