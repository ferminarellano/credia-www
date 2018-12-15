<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Indicador extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'indicadores';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','descripcion','frecuencia','frecuencia_posteo',
						   'protocolo_recoleccion','calculo_indicador',
						   'tipo_indicador','evaluacion_tipo','unidad_medida_id',
						   'institucion_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre',
		'descripcion' => 'descripción',
		'frecuencia' => 'frecuencia',
		'frecuencia_posteo' => 'frecuencia de posteo',
		'protocolo_recoleccion' => 'protocolo de recolección',
		'calculo_indicador' => 'cálculo de indicador',
		'tipo_indicador' => 'tipo de indicador',
		'evaluacion_tipo' => 'tipo de evaluación',
		'unidad_medida_id' => 'unidad de medida',
		'institucion_id' => 'institución',
	);

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
	
	public function data_indicadores()
	{
		return $this->hasMany('App\Models\DataIndicador');
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
