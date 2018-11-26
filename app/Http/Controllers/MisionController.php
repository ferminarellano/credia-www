<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use View;

class MisionController extends Controller
{
	public function mision()
	{
		$banner = Banner::where([['indicador','=','mision']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
		);
		
		return View::make('contenido.mision')->with($data);
	}
}
