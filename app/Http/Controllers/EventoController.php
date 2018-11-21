<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Evento;
use App\Models\Social;
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
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"eventos" => $eventos,
			"redes" => $redes,
		);
		
		return View::make('eventos.evento')->with($data);
	}
	
	public function eventodetalle($slug,$id)
	{
		$evento = Evento::where([['id',$id]])->get();
		$redes = Social::all();
		
		$data = array(
			"evento" => $evento,
			"redes" => $redes,
		);
		
		return View::make('eventos.eventodetalle')->with($data);
	}
}
