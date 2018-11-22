<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Proyecto;
use App\Models\Categoria;
use App\User;
use View;

class ProyectoController extends Controller
{	
	public function proyecto()
	{
		$banner = Banner::where([['indicador','=','proyectos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$proyectos = Proyecto::orderBy('id','desc')->paginate(6);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"proyectos" => $proyectos,
		);
		
		return View::make('proyectos.proyecto')->with($data);
	}
	
	public function search_categoria_proyecto($categoria,$id)
	{
		$banner = Banner::where([['indicador','=','blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();

		$proyectos = Proyecto::where([['categoria_id',$id]])->orderBy('id','desc')->paginate(6);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"proyectos" => $proyectos,
		);
		
		return View::make('proyectos.proyecto')->with($data);
	}
	
	public function proyectodetalle($slug,$id)
	{	
		$proyecto = Proyecto::where([['id',$id]])->get();
		$redes = Social::all();
		$categorias = Categoria::all();
		
		$data = array(
			"proyecto" => $proyecto,
			"redes" => $redes,
			"categorias" => $categorias,
		);
		
		return View::make('proyectos.proyectodetalle')->with($data);
	}
}
