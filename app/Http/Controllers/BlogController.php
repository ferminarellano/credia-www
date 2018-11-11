<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Social;
use View;

class BlogController extends Controller
{
	public function blog()
	{
		$banner = Banner::where([['indicador','=','blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$articulos = Blog::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"articulos" => $articulos,
			"redes" => $redes,
		);
		
		return View::make('contenido.blog')->with($data);
	}
	
	public function blogdetalle($id)
	{
		$articulo = Blog::where([['id',$id],['estado','0']])->get();
		$categorias = Categoria::all();
		$redes = Social::all();
		
		$data = array(
			"articulo" => $articulo,
			"categorias" => $categorias,
			"redes" => $redes,
		);
		
		return View::make('contenido.blogdetalle')->with($data);
	}
}
