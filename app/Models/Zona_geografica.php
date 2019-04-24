<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zona_geografica extends Model
{
    protected $table = 'zonas_geograficas';
    protected $primaryKey = 'id';
	protected $fillable = ['nombre','nivel','padre_id','activo'];
	
	public function padre()
	{
		return $this->belongsTo('App\Models\Zona_geografica', 'padre_id');
	}
}
