<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class GaleriaController extends Controller
{
    public function galeria()
	{
		return View::make('contenido.galeria');
	}
}
