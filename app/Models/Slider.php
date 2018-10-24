<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class Slider extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'sliders';
    protected $primaryKey = 'id';
    // protected $guarded = ['id'];
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['foto','indicador','titulo','contenido','secuencia'];
    // protected $hidden = [];
    // protected $dates = [];
	public $timestamps = true;
	protected $visible = ['foto'];
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'foto' => 'foto',
		'titulo' => 'título',
		'contenido' => 'contenido',
		'secuencia' => 'secuencia',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
		public static function boot()
		{
			parent::boot();
			
			self::creating(function($model)
			{	
				$indicador = "inicio";
				
				$model->indicador = $indicador;
			});
			
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
			$destination_path = "images/fotos";
			$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
		}
}
