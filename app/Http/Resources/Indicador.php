<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Indicador extends JsonResource
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
