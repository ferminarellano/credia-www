<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Equipo;
use View;

class ConoceController extends Controller
{
    public function snosotros()
	{
		$banner = Banner::where([['indicador','=','fundacion']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$empleados = Equipo::orderBy('id','asc')->take(4)->get();
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"empleados" => $empleados,
		);
		
		return View::make('contenido.sobrenosotros')->with($data);
	}
}
