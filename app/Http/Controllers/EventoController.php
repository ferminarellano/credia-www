<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class EventoController extends Controller
{
	public function evento()
	{
		$banner = Banner::where([['indicador','=','eventos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
		);
		
		return view('contenido.evento')->with($data);
	}
	
	public function eventodetalle()
	{
		return view('contenido.eventodetalle');
	}
}
