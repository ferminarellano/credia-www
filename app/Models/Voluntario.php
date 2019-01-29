<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;
use File;

class Voluntario extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'voluntarios';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['actividad_voluntario_id','nombre','correo','archivo','descripcion'];
    // protected $hidden = [];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
	protected $visible = ['archivo'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre',
		'correo' => 'correo',
		'archivo' => 'archivo',
		'descripcion' => 'descripción',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
		
		self::deleting(function($model) {
			// Storage::disk('public')->delete($obj->archivo);
			// File::delete($model->archivo);
		});
	}
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/

	public function actividad_voluntario()
	{
		return $this->belongsTo('App\Models\ActividadVoluntario');
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
