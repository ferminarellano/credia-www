<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Voluntario;
use App\Models\Actividad;
use App\Models\Sistema;
use App\Models\Social;
use App\Models\DataIndicador;
use View;

use App\Http\Resources\DataIndicador as DataIndicadorResource;
use Carbon\Carbon;
use Storage;
use File;

class SistemaController extends Controller
{
	public function sistema()
	{
		$banner = Banner::where([['indicador','=','sistema']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$sistemas = Sistema::where([['estado','=','1']])->get();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"sistemas" => $sistemas,
		);
		
		return View::make('pagina-web.sistemas.sistema')->with($data);
	}
	
	public function sistemadetalle($slug,$id)
	{
		$sistema = Sistema::where([['estado','=','1'],['id',$id]])->get();
		$sistemas = Sistema::where([['id','!=',$id],['estado','1']])->get();
		$redes = Social::all();
		
		$data = array(
			"sistema" => $sistema,
			"sistemas" => $sistemas,
			"redes" => $redes,
		);
		
		return View::make('pagina-web.sistemas.sistemadetalle')->with($data);
	}
		
	public function search_indicata(Request $request)
	{
		$indicadores = $this->reduce($request->input('indicadores',[]));
		$pais = $this->reduce($request->input('pais',[]));
		$departamentos = $this->reduce($request->input('departamentos',[]));
		$municipios = $this->reduce($request->input('municipios',[]));
		$periodos = $this->reduce($request->input('periodos',[]));
		
		$zonas = array_merge($pais, $departamentos, $municipios);
		
		// 2017, 2018
		
		$sql = DataIndicador::whereIn('indicador_id', $indicadores)->whereIn('zona_id', $zonas);		
		$sql = $this->prepareDateFilters($sql, $periodos);
		
		return DataIndicadorResource::collection(
			$sql->get()
		);
	}
	
	/**
	  /*  Utilities
	   */
	   
	public function prepareDateFilters($sql, $periodos)
	{
		$sql->where(function($query) use ($periodos) {
			
			for($i = 0; $i<sizeof($periodos); $i++) {
				
				if($i===0) {
					$query->whereYear('fecha_inicio', $periodos[$i]);
				}
				else {
					$query->orWhere(function($nest) use ($periodos, $i) {
						$nest->whereYear('fecha_inicio', $periodos[$i]);
					});
				}
			}
					 
		});
		
		return $sql;
	}
	 
	public function flatten($carry, $item)
	{
		$new_item = $item[0];
		array_push($carry, $new_item);
		return $carry;
	}

	public function reduce($array)
	{
		return array_reduce($array,  array($this, 'flatten'),[]);
	}
	
}
