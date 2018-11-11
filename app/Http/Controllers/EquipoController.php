<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class EquipoController extends Controller
{
	public function equipo()
	{
		return View::make('contenido.equipo');
	}
}
