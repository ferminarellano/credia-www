<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
	public function evento()
	{
		return view('contenido.evento');
	}
	
	public function eventodetalle()
	{
		return view('contenido.eventodetalle');
	}
}
