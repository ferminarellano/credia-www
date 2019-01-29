<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Album;
use View;

class MultimediaController extends Controller
{
    public function multimedia()
	{	
		$banner = Banner::where([['indicador','=','galeria']])->get();
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
		
		return View::make('pagina-web.multimedia.multimedia_principal')->with($data);
	}
	
	public function foto()
	{	
		$banner = Banner::where([['indicador','=','galeria']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$albums = Album::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"albums" => $albums,
		);
		
		return View::make('pagina-web.multimedia.albumes')->with($data);
	}
}
