<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Componente;
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
		
		$actividades = Actividad::where([['indicador','=','centro de documentacion'],['estado','=','1']])->paginate(6);
		
		$componentes = Componente::where([['nombre','=','centro de documentacion']])->get();	
		$archivos = $componentes->first()->descargas()->get();
		$fotos = $componentes->first()->fotos()->get();
		$videos = $componentes->first()->videos()->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"actividades" => $actividades,
			"archivos" => $archivos,
			"fotos" => $fotos,
			"videos" => $videos,
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
		
		$actividades = Actividad::where([['indicador','=','educacion ambiental'],['estado','=','1']])->orderBy('id', 'desc')->paginate(6);

		$componentes = Componente::where([['nombre','=','educacion ambiental']])->get();	
		$archivos = $componentes->first()->descargas()->get();
		$fotos = $componentes->first()->fotos()->get();
		$videos = $componentes->first()->videos()->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"actividades" => $actividades,
			"archivos" => $archivos,
			"fotos" => $fotos,
			"videos" => $videos,
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
		
		$actividades = Actividad::where([['indicador','=','observatorio de desarrollo sostenible'],['estado','=','1']])->paginate(6);
		
		$componentes = Componente::where([['nombre','=','observatorio de desarrollo sostenible']])->get();	
		$archivos = $componentes->first()->descargas()->get();
		$fotos = $componentes->first()->fotos()->get();
		$videos = $componentes->first()->videos()->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"actividades" => $actividades,
			"archivos" => $archivos,
			"fotos" => $fotos,
			"videos" => $videos,
		);
		
		return View::make('pagina-web.componentes.observatorio.observatorio')->with($data);
	}
}
