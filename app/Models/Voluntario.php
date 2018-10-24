<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Voluntario extends Model
{
    use CrudTrait;

    /*------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |------------------------------------------------------------------------*/

    protected $table = 'voluntarios';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','correo','archivo','descripcion'];
    // protected $hidden = [];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

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

	public function actividad()
	{
		return $this->belongsTo('App\Models\Actividad');
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
