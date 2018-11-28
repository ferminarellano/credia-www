<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Institucion extends Model
{
    use CrudTrait;
	
    protected $table = 'instituciones';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre'];
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
        return $this->nombre;
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function users()
	{
		return $this->hasMany('App\User');
	}
	
	public function indicadores()
	{
		return $this->hasMany('App\Models\Indicador');
	}
	
	public function fuentes()
	{
		return $this->hasMany('App\Models\Fuente');
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
