<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Faq;

use View;

class FaqController extends Controller
{
	public function faq()
	{
		$banner = Banner::where([['indicador','=','faq']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$faqs = Faq::orderBy('id','desc')->paginate(8);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"faqs" => $faqs,
		);
		
		return View::make('contenido.faq')->with($data);
	}
}
