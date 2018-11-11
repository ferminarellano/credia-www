<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use View;

class ActividadController extends Controller
{
    public function servicio()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.servicio')->with($data);
	}
}
