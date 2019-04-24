<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Componente;
use App\Models\Banner;
use App\Models\Social;
use View;

class ActividadController extends Controller
{
    public function actividad()
	{
		$banner = Banner::where([['indicador','=','actividad']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$actividades = Actividad::where([['indicador','=','educacion ambiental'],['estado','=','1']])->paginate(2);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"actividades" => $actividades,
		);
		
		return View::make('pagina-web.actividades.actividad')->with($data);
	}
	
	public function actividadetalle($slug,$id)
	{
		$actividad = Actividad::where([['id',$id],['estado','1']])->get();
		$actividades = Actividad::where([['id','!=',$id],['estado','1']])->get();
		$redes = Social::all();
		
		$archivos = $actividad->first()->descargas()->get();
		$fotos = $actividad->first()->fotos()->get();
		$videos = $actividad->first()->videos()->get();
		
		$data = array(
			"actividad" => $actividad,
			"actividades" => $actividades,
			"redes" => $redes,
			"archivos" => $archivos,
			"fotos" => $fotos,
			"videos" => $videos,
		);
		
		return View::make('pagina-web.actividades.actividadetalle')->with($data);
	}
}
