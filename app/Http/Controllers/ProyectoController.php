<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use View;

class ProyectoController extends Controller
{
	public function proyecto()
	{
		$banner = Banner::where([['indicador','=','proyectos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
		);
		
		return View::make('contenido.proyecto')->with($data);
	}
}
