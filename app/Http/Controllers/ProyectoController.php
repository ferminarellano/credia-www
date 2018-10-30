<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

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
		
		return view('contenido.proyecto')->with($data);
	}
}
