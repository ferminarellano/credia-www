<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ActividadController extends Controller
{
    public function servicio()
	{
		return View::make('contenido.servicio');
	}
}
