<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Indicador extends Model
{
    use CrudTrait;

    protected $table = 'indicadores';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','descripcion','frecuencia','frecuencia_posteo',
						   'protocolo_recoleccion','calculo_indicador','estado',
						   'tipo_indicador','evaluacion_tipo','unidad_medida_id',
						   'institucion_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public function users()
	{
		return $this->belongsToMany('App\User', 'indicador_user','indicador_id');
	}
	
	public static function boot()
    {
		parent::boot();
    }
	
	public function identifiableName()
    {
        return $this->nombre;
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function unidad_medida()
	{
		return $this->belongsTo('App\Models\UnidadMedida', 'unidad_medida_id');
	}
	
	public function institucion()
	{
		return $this->belongsTo('App\Models\Institucion', 'institucion_id');
	}
	
    /*------------------------------------------------------------------------
    | SCOPES
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | ACCESORS
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | MUTATORS
    |------------------------------------------------------------------------*/
}
