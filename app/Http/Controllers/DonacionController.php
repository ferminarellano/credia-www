<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonacionController extends Controller
{
	public function donacion()
	{
		return view('contenido.donacion');
	}
	
	public function precio()
	{
		return view('contenido.precio');
	}
}
