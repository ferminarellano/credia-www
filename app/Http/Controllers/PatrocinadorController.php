<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use View;

class PatrocinadorController extends Controller
{
	public function donacion()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.patrocinador')->with($data);
	}
	
	public function precio()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.precio')->with($data);
	}
}
