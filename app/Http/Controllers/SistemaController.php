<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Voluntario;
use App\Models\Actividad;
use App\Models\Sistema;
use App\Models\Social;
use View;

use Storage;
use File;

class SistemaController extends Controller
{
	public function sistema()
	{
		$banner = Banner::where([['indicador','=','sistema']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$sistemas = Sistema::where([['estado','=','1']])->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"sistemas" => $sistemas,
		);
		
		return View::make('contenido.sistema')->with($data);
	}
	
}
