<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Zona_geografica extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'value' => $this->id,
			'label' => $this->nombre
		];
		
	}
}
