<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Actividad extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;
	
    protected $table = 'actividades';
	protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['titulo','descripcion','contenido','estado','foto'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
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
			Storage::disk('public')->delete($obj->foto);
        });
	}
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
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
