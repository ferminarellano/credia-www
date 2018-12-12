<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Voluntario;
use App\Models\Actividad;
use App\Models\Evento;
use App\Models\Proyecto;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Blog;
use View;

use Storage;
use File;

class IndexController extends Controller
{
	public function index()
	{
		$sliders = Banner::where([['indicador','=','inicio']])->orderBy('secuencia', 'asc')->get();
		$actividades = Actividad::where('estado','=','1')->get();
		$eventos = Evento::orderBy('id','desc')->take(3)->get();
		$redes = Social::all();
		$proyectos = Proyecto::orderBy('id','desc')->take(3)->get();
		$articulos = Blog::where([['estado','=','1']])->orderBy('id','desc')->take(3)->get();
		
		$data = array(
			"sliders" => $sliders,
			"actividades" => $actividades,
			"eventos" => $eventos,
			"redes" => $redes,
			"proyectos" => $proyectos,
			"articulos" => $articulos,
		);
		
		return View::make('index')->with($data);
	}
	
	public function store(Request $request)
    {
		$voluntario = new Voluntario;

        $voluntario->nombre = $request->nombre;
        $voluntario->correo = $request->correo;
		
        $file = $request->file('file');
		$file_name = $file->getClientOriginalName();
		
		Storage::disk('public')->put('curriculums/'.$file_name, File::get($file));
		
        $voluntario->archivo =  Storage::url('uploads/curriculums/'.$file_name);
        $voluntario->descripcion = $request->descripcion;
        $voluntario->actividad_id = $request->actividad_id;
					
		$voluntario->save();
					
		return redirect('/');
    }
}
