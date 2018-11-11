<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use View;

class ConoceController extends Controller
{
    public function snosotros()
	{
		$banner = Banner::where([['indicador','=','fundacion']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
		);
		
		return View::make('contenido.sobrenosotros')->with($data);
	}
}
