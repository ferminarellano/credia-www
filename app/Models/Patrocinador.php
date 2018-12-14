<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Patrocinador extends Model
{
    use CrudTrait;

    protected $table = 'patrocinadores';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','foto'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];
	protected $guard_name = 'web';

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
		parent::boot();
		
		self::deleting(function($obj) {
			\Storage::disk('public_folder')->delete($obj->foto);
		});
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function eventos()
	{
		return $this->belongsToMany('App\Models\Evento','evento_patrocinador','patrocinador_id');
	}
	
	public function proyectos()
	{
		return $this->belongsToMany('App\Models\Proyecto','proyecto_patrocinador','patrocinador_id');
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
		$destination_path = "images/fotos-patrocinadores";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
