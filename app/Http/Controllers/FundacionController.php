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
		$banner = Banner::where([['indicador','=','fundacion']])->get();
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
		
		return View::make('pagina-web.otras-secciones.quienes_somos')->with($data);
	}
	
	public function estructura_organizativa()
	{
		$banner = Banner::where([['indicador','=','fundacion']])->get();
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
		
		return View::make('pagina-web.otras-secciones.estructura_organizativa')->with($data);
	}
	
	public function equipo_trabajo()
	{
		$banner = Banner::where([['indicador','=','fundacion']])->get();
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
		
		return View::make('pagina-web.otras-secciones.equipo_de_trabajo')->with($data);
	}
}
