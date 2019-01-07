<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use View;

class GaleriaController extends Controller
{
    public function galeria()
	{	
		$banner = Banner::where([['indicador','=','blog']])->get();
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
		
		return View::make('pagina-web.otras-secciones.galeria')->with($data);
	}
}
