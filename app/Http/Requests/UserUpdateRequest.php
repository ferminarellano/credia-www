<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize()
    {
		return \Auth::check();
    }

    public function rules()
    {
        return [
            'email'    => 'required',
            'name'     => 'required',
            'password' => 'confirmed',
        ];
    }
	
	public function messages()
    {
        return [
			'email.required' => 'Necesita agregar el correo para crear la cuenta.',
			'name.required' => 'Necesita agregar el nombre de usuario.',
			'password.confirmed' => 'Es necesario confirmar la contraseña.',
        ];
    }
}
