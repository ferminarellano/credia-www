<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Proyecto extends Model
{
    use CrudTrait;

    protected $table = 'proyectos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['titulo','subtitulo','foto','fecha_convenio','contenido','presupuesto',
						   'utilizado','fecha_inicio','fecha_finalizacion','estado','categoria_id',
						   'user_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];

    /*------------------------------------------------------------------------
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
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function patrocinadores()
	{
		return $this->belongsToMany('App\Models\Patrocinador', 'proyecto_patrocinador','proyecto_id');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}
	
	public function categoria()
	{
		return $this->belongsTo('App\Models\Categoria');
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
		$destination_path = "images/fotos-proyectos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
