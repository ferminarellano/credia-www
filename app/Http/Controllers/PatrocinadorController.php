<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PatrocinadorController extends Controller
{
	public function donacion()
	{
		return View::make('contenido.patrocinador');
	}
	
	public function precio()
	{
		return View::make('contenido.precio');
	}
}
