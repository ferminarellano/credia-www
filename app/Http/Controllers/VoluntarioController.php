<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Voluntario;
use App\Models\Actividad;
use App\Models\Social;
use View;

class VoluntarioController extends Controller
{
	public function voluntario()
	{
		$banner = Banner::where([['indicador','=','voluntario']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$actividades = Actividad::where('estado','=','1')->get();
		$redes = Social::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"actividades" => $actividades,
			"redes" => $redes,
		);
		
		return View::make('contenido.voluntario')->with($data);
	}
	
	public function store(Request $request)
    {
		$voluntario = new Voluntario;

        $voluntario->nombre = $request->nombre;
        $voluntario->correo = $request->correo;
		
        //$file = $request->file('archivo');
		//$file_name = $file->getClientOriginalName();
		
		//\Storage::disk('local')->put($file_name,  \File::get($file));
		
		//$voluntario->descripcion = $file_name;
        $voluntario->descripcion = $request->descripcion;
        $voluntario->actividad_id = $request->actividad_id;
					
		$voluntario->save();
					
		return redirect('/voluntarios');
    }
}
