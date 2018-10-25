<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisionController extends Controller
{
	public function mision()
	{
		return view('contenido.mision');
	}
}
