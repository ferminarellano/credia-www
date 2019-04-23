<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\InstitucionResource;

class FuenteResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'nombre' => $this->fuente,
			'institucion' => new InstitucionResource($this->institucion)
		];
		
	}
}
