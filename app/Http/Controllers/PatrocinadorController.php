<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatrocinadorController extends Controller
{
	public function donacion()
	{
		return view('contenido.patrocinador');
	}
	
	public function precio()
	{
		return view('contenido.precio');
	}
}
