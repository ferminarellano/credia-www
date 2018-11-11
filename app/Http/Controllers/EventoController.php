<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Evento;
use View;

class EventoController extends Controller
{
	public function evento()
	{
		$banner = Banner::where([['indicador','=','eventos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$eventos = Evento::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"eventos" => $eventos,
		);
		
		return View::make('contenido.evento')->with($data);
	}
	
	public function eventodetalle($id)
	{
		$evento = Evento::where([['id',$id]])->get();
		
		$data = array(
			"evento" => $evento,
		);
		
		return View::make('contenido.eventodetalle')->with($data);
	}
}
