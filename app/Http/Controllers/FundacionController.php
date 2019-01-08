<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Equipo;
use View;

class FundacionController extends Controller
{
    public function quien_somos()
	{
		$banner = Banner::where([['indicador','=','quienes_somos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$empleados = Equipo::orderBy('id','desc')->paginate(6);
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
		);
		
		return View::make('pagina-web.fundacion.quienes_somos')->with($data);
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
		
		return View::make('pagina-web.componentes.componente_observatorio')->with($data);
	}
	
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
		
		return View::make('pagina-web.componentes.componente_cendoc')->with($data);
	}
	
	public function educacion_ambiental()
	{
		$banner = Banner::where([['indicador','=','educacion_ambiental']])->get();
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
		
		return View::make('pagina-web.componentes.componente_edu_ambiental')->with($data);
	}
	
	public function estructura_organizativa()
	{
		$banner = Banner::where([['indicador','=','estructura_organizativa']])->get();
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
		
		return View::make('pagina-web.fundacion.estructura_organizativa')->with($data);
	}
	
	public function equipo_trabajo()
	{
		$banner = Banner::where([['indicador','=','equipo_trabajo']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$empleados = Equipo::orderBy('id','desc')->paginate(6);
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"empleados" => $empleados,
		);
		
		return View::make('pagina-web.fundacion.equipo_de_trabajo')->with($data);
	}
	
	public function convenio()
	{
		$banner = Banner::where([['indicador','=','convenios']])->get();
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
		
		return View::make('pagina-web.fundacion.convenio')->with($data);
	}
	
	public function informes()
	{
		$banner = Banner::where([['indicador','=','informes']])->get();
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
		
		return View::make('pagina-web.fundacion.informe_anual')->with($data);
	}
}
