<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConoceController extends Controller
{
    public function snosotros()
	{
		return view('contenido.sobrenosotros');
	}
}
