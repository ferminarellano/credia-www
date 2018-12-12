<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Banner;
use App\Models\Social;
use View;

class ContactoController extends Controller
{
	public function contacto()
	{
		$banner = Banner::where([['indicador','=','contacto']])->get();
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
		
		return View::make('contenido.contacto')->with($data);
	}
	
	public function store(Request $request)
    {
		$contacto = new Contacto;

        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
					
		$contacto->save();
					
		return redirect('/contactos#formcontacto');
    }
}
