<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class MisionController extends Controller
{
	public function mision()
	{
		return View::make('contenido.mision');
	}
}
