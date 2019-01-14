<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Banner;
use App\Models\Social;
use View;

class ComponenteController extends Controller
{	
	public function cendoc()
	{
		$banner = Banner::where([['indicador','=','cendoc']])->get();
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
		
		return View::make('pagina-web.componentes.cendoc.cendoc')->with($data);
	}
	
	public function educacion_ambiental()
	{
		$banner = Banner::where([['indicador','=','educacion_ambiental']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$actividades = Actividad::where([['indicador','=','edu_ambiental'],['estado','=','1']])->paginate(4);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"actividades" => $actividades,
		);
		
		return View::make('pagina-web.componentes.educacion.educacion_ambiental')->with($data);
	}
	
	public function observatorio()
	{
		$banner = Banner::where([['indicador','=','observatorio']])->get();
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
		
		return View::make('pagina-web.componentes.observatorio.observatorio')->with($data);
	}
}
