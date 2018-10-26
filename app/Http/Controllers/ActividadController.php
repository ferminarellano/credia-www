<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function servicio()
	{
		return view('contenido.servicio');
	}
}
