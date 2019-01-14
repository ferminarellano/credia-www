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
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['titulo','descripcion','contenido','foto','estado','indicador','fotos'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto','fotos'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'estado' => 'estado de actividad',
		'foto' => 'fotografía de actividad',
		'titulo' => 'título de actividad',
		'descripcion' => 'descripción de actividad',
		'contenido' => 'contenido de actividad',
		'indicador' => 'componente',
		'fotos' => 'fotos',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
		
		self::deleting(function($obj) {	
			Storage::disk('public')->delete($obj->foto);
			
			if (count((array)$obj->fotos)) {
                foreach ($obj->fotos as $file_path) {
					Storage::disk('public')->delete($file_path);
                }
            }
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
	
	public function setFotosAttribute($value)
    {
        $attribute_name = "fotos";
        $disk = "public";
        $destination_path = "images/fotos-actividades/gallery";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
