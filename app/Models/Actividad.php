<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Actividad extends Model
{
    use CrudTrait;

    /*------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |------------------------------------------------------------------------*/

    protected $table = 'actividades';
	protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['actividad'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
	}
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function voluntarios(){
		return $this-> hasMany('App\Models\Voluntario');
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
