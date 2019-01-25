<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{

    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
			'album_id' => 'required',
			'url_video' => 'required',
			'descripcion' => 'nullable|max:400',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
			'album_id.required' => 'Es necesario seleccionar a que álbum pertenecen las fotografías.',
			'url_video.required' => 'Es necesario agregar la URL del video.',
			'descripcion.max' => 'La cantidad máxima para la descripción es de: 400 caracteres.',
        ];
    }
}
