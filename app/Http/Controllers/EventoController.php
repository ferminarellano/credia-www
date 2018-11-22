<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Evento;
use App\Models\Social;
use View;
use Mail;
use Session;
use Redirect;



class EventoController extends Controller
{
	public function evento()
	{
		$banner = Banner::where([['indicador','=','eventos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		
		$eventos = Evento::orderBy('id','desc')->paginate(6);
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"eventos" => $eventos,
			"redes" => $redes,
		);
		
		return View::make('eventos.evento')->with($data);
	}
	
	public function eventodetalle($slug,$id)
	{
		$eventos = Evento::where([['id',$id]])->get();
		$redes = Social::all();
		
		$data = array(
			"eventos" => $eventos,
			"redes" => $redes,
		);
		
		return View::make('eventos.eventodetalle')->with($data);
	}
	
	public function store(Request $request,$slug,$id)
    {	
		Mail::send('emails.contacto',$request->all(), function($msj){
			$msj->subject('correo de Contacto');
			$msj->to('josedgregorio07@gmail.com');
		});
		
		Session::flash('message','Mensaje enviado correctamente');
					
		return redirect()->route('eventodetalle',['slug' => $slug,'id' => $id]);
    }
}
