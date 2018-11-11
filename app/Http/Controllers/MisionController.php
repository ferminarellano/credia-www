<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use View;

class MisionController extends Controller
{
	public function mision()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.mision')->with($data);
	}
}
