<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use View;

class ContactoController extends Controller
{
	public function contacto()
	{
		return View::make('contenido.contacto');
	}
	
	public function store(Request $request)
    {
		$contacto = new Contacto;

        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
					
		$contacto->save();
					
		return redirect('/contactos');
    }
}
