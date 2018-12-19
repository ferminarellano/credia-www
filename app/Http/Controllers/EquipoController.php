<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Equipo;
use View;

class EquipoController extends Controller
{
	public function equipo()
	{
		$banner = Banner::where([['indicador','=','equipo']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		$empleados = Equipo::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"empleados" => $empleados,
		);
		
		return View::make('pagina-web.otras-secciones.equipo')->with($data);
	}
}
