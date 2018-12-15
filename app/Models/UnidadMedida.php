<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class UnidadMedida extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'unidades_de_medidas';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre',
	);

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
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
	
	public function indicadores()
	{
		return $this->hasMany('App\Models\Indicador');
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
