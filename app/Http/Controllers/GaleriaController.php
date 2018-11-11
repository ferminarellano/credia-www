<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use View;

class GaleriaController extends Controller
{
    public function galeria()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.galeria')->with($data);
	}
}
