<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categoria;
use View;

class BlogController extends Controller
{
	public function blog()
	{
		$banner = Banner::where([['indicador','=','blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$articulos = Blog::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"articulos" => $articulos,
		);
		
		return View::make('contenido.blog')->with($data);
	}
	
	public function blogdetalle($id)
	{
		$articulo = Blog::where([['id',$id],['estado','0']])->get();
		$categorias = Categoria::all();
		
		$data = array(
			"articulo" => $articulo,
			"categorias" => $categorias,
		);
		
		return View::make('contenido.blogdetalle')->with($data);
	}
}
