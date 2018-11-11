<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Voluntario;
use App\Models\Actividad;
use App\Models\Evento;
use View;

class IndexController extends Controller
{
	public function index()
	{
		$sliders = Slider::where([['indicador','=','inicio']])->orderBy('secuencia', 'asc')->get();
		$actividades = Actividad::where('estado','=','1')->get();
		$eventos = Evento::all();
		
		$data = array(
			"sliders" => $sliders,
			"actividades" => $actividades,
			"eventos" => $eventos,
		);
		
		return View::make('index')->with($data);
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
					
		return redirect('/');
    }

	public function faq()
	{
		return View::make('contenido.faq');
	}
	
}
