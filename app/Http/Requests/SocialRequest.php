<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
{
    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'red' => 'required|unique:redes_sociales',
            'url' => 'required',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'red.required' => 'Es necesario agregar la red social.',
            'red.unique' => 'La red social ya se encuentra registrada, solamente puede modificar la existente.',
			'url.required' => 'Es necesario agregar la url de la red social.',
        ];
    }
}
