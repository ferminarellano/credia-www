<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Slider;
use App\Models\Voluntario;
use App\Models\Actividad;
use View;

class PaginaController extends Controller
{
	public function inicio()
	{
		$sliders = Slider::where([['indicador','=','inicio']])->orderBy('secuencia', 'asc')->get();
		$actividades = Actividad::where('estado','=','1')->get();
		
		$data = array(
			"sliders" => $sliders,
			"actividades" => $actividades,
		);
		
		return View::make('index')->with($data);
	}
	
	public function store_voluntario(Request $request)
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
	
	public function snosotros()
	{
		return view('sobrenosotros');
	}
	
	public function proyecto()
	{
		return view('proyecto');
	}
	
	public function evento()
	{
		return view('evento');
	}
	
	public function eventodetalle()
	{
		return view('eventodetalle');
	}
	
	public function blog()
	{
		return view('blog');
	}
	
	public function blogdetalle()
	{
		return view('blogdetalle');
	}
	
	public function donacion()
	{
		return view('donacion');
	}
	
	public function faq()
	{
		return view('faq');
	}
	
	public function mision()
	{
		return view('mision');
	}
	
	public function galeria()
	{
		return view('galeria');
	}
	
	public function precio()
	{
		return view('precio');
	}
	
	public function servicio()
	{
		return view('servicio');
	}
	
	public function equipo()
	{
		return view('equipo');
	}
	
	public function voluntario()
	{
		return view('voluntario');
	}
	
	public function contacto()
	{
		return view('contacto');
	}
}
