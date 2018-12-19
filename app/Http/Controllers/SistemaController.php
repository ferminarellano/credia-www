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
		
		return View::make('pagina-web.sistemas.sistema')->with($data);
	}
	
	public function sistemadetalle($slug,$id)
	{
		$sistema = Sistema::where([['estado','=','1'],['id',$id]])->get();
		$sistemas = Sistema::where([['id','!=',$id],['estado','1']])->get();
		$redes = Social::all();
		
		$data = array(
			"sistema" => $sistema,
			"sistemas" => $sistemas,
			"redes" => $redes,
		);
		
		return View::make('pagina-web.sistemas.sistemadetalle')->with($data);
	}
	
}
