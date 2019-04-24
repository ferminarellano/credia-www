<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\InstitucionResource;
use App\Http\Resources\Unidad_medidaResource;

class IndicadorResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'nombre' => $this->nombre,
			'unidad_medida' => new Unidad_medidaResource($this->unidad_medida),
			'institucion' => new InstitucionResource($this->institucion),
		];
		
	}
}
