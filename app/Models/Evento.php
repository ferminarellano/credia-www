<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Evento extends Model
{
    use CrudTrait;

    protected $table = 'eventos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['titulo','subtitulo','foto','fecha','contenido','organizador',
						   'horaInicio','horaFinal','direccion','telefono','correo',
						   'latitud','longitud'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto','latitud','longitud'];

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
		parent::boot();
		
		self::deleting(function($obj) {
			if (count((array)$obj->fotos)) {
				foreach ($obj->fotos as $file_path) {
					\Storage::disk('public_folder')->delete($obj->image);
				}
			}
		});
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function patrocinadores()
	{
		return $this->belongsToMany('App\Models\Patrocinador', 'evento_patrocinador','evento_id') ;
	}
	
	public function contacto_eventos()
	{
		return $this->hasMany('App\Models\ContactoEvento');
	}
	
    /*-------------------------------------------------------------------------
    | SCOPES
    |------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------
    | ACCESORS
    |------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------
    | MUTATORS
    |------------------------------------------------------------------------*/
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "images/fotos-detalle-eventos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
