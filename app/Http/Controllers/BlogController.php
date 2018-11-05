<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;

class BlogController extends Controller
{
	public function blog()
	{
		$banner = Banner::where([['indicador','=','blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$articulo = Blog::where([['id','=','2']])->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"articulo" => $articulo,
		);
		
		return view('contenido.blog')->with($data);
	}
	
	public function blogdetalle()
	{
		$articulo = Blog::where([['id','=','2']])->get();
		
		$data = array(
			"articulo" => $articulo,
		);
		
		return view('contenido.blogdetalle')->with($data);
	}
}
