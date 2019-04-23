<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Zona_geograficaResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'nombre' => $this->nombre,
			'nivel' => $this->nivel,
			'padre' => new Zona_geograficaResource($this->padre)
		];
		
	}
}
