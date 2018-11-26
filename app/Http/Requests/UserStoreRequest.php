<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{

    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'email'    => 'required|unique:'.config('permission.table_names.users', 'users').',email',
            'name'     => 'required',
            'password' => 'required|confirmed',
        ];
    }
	
	public function messages()
    {
        return [
			'email.required' => 'Necesita agregar el correo para crear la cuenta.',
			'email.unique' => 'Necesita agregar un correo electronico que no se encuentre en uso.',
			'name.required' => 'Necesita agregar el nombre de usuario.',
			'password.required' => 'Necesita agregar la contraseña para confirmar la cuenta.',
			'password.confirmed' => 'Es necesario confirmar la contraseña.',
        ];
    }
}
