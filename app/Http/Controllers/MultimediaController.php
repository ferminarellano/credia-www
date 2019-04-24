<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Foto;
use App\Models\Video;
use App\Models\Social;
use App\Models\Album;
use View;

class MultimediaController extends Controller
{
    public function multimedia()
	{	
		$banner = Banner::where([['indicador','=','galeria']])->get();
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
		
		return View::make('pagina-web.multimedia.multimedia_principal')->with($data);
	}
	
	public function album($slug)
	{	
		if($slug === "fotos"){
			$banner = Banner::where([['indicador','=','album_fotos']])->get();
		}else{
			$banner = Banner::where([['indicador','=','album_videos']])->get();
		}
		
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$albums = Album::where([['tipo','=',$slug],['estado','=','1']])->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"albums" => $albums,
		);
		
		if($slug === "fotos"){
			return View::make('pagina-web.multimedia.album_fotos')->with($data);
		}else{
			return View::make('pagina-web.multimedia.album_videos')->with($data);
		}
	}
	
	public function foto($id)
	{	
		$banner = Banner::where([['indicador','=','fotos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$fotos = Foto::where([['album_id','=',$id]])->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"fotos" => $fotos,
		);
		
		return View::make('pagina-web.multimedia.foto')->with($data);
	}
	
	public function video($id)
	{	
		$banner = Banner::where([['indicador','=','videos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$videos = Video::where([['album_id','=',$id]])->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"videos" => $videos,
		);
		
		return View::make('pagina-web.multimedia.video')->with($data);
	}
}
