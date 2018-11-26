<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use View;

class PatrocinadorController extends Controller
{
	public function donacion()
	{
		$banner = Banner::where([['indicador','=','patrocinador']])->get();
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
		
		return View::make('contenido.patrocinador')->with($data);
	}
	
	public function precio()
	{
		$redes = Social::all();
		
		$data = array(
			"redes" => $redes,
		);
		
		return View::make('contenido.precio')->with($data);
	}
}
