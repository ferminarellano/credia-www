<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use View;

class EquipoController extends Controller
{
	public function equipo()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.equipo')->with($data);
	}
}
