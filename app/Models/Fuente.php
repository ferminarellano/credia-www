<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Fuente extends Model
{
    use CrudTrait;

    protected $table = 'fuentes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['fuente','institucion_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';

	/*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
		parent::boot();
    }
	
	public function identifiableName()
    {
        return $this->fuente;
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
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
