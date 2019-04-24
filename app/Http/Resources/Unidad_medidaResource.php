<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\InstitucionResource;

class Unidad_medidaResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'nombre' => $this->nombre
		];
		
	}
}
