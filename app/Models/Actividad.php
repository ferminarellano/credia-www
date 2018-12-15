<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Actividad extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;
	
    protected $table = 'actividades';
	protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['actividad','estado','foto','titulo','descripcion','contenido'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'actividad' => 'nombre de actividad',
		'estado' => 'estado de actividad',
		'foto' => 'fotografía de actividad',
		'titulo' => 'título de actividad',
		'descripcion' => 'descripción de actividad',
		'contenido' => 'contenido de actividad',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
		
		self::deleting(function($obj) {	
			\Storage::disk('public_folder')->delete($obj->foto);
        });
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
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "images/fotos-actividades";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
