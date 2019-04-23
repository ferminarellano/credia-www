<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\IndicadorResource as IndicadorResource;
use App\Http\Resources\InstitucionResource;
use App\Http\Resources\FuenteResource;
use App\Http\Resources\Zona_geograficaResource;

class DataIndicador extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'indicador' => new IndicadorResource($this->indicador),
			'fecha_inicio' => $this->fecha_inicio,
			'fecha_final' => $this->fecha_final,
			'valor' => $this->valor,
			'institucion' => new InstitucionResource($this->institucion),
			'fuente' => new FuenteResource($this->fuente),
			'zona_geografica' => new Zona_geograficaResource($this->zona)
		];
		
	}
}
