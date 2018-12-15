<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;

class Proyecto extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'proyectos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['titulo','subtitulo','foto','fecha_convenio','contenido','presupuesto',
						   'avance','utilizado','fecha_inicio','fecha_finalizacion','estado',
						   'categoria_id','user_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'titulo' => 'titulo',
		'subtitulo' => 'subtitulo',
		'foto' => 'foto',
		'fecha_convenio' => 'fecha de convenio',
		'contenido' => 'contenido',
		'presupuesto' => 'presupuesto',
		'avance' => 'avance',
		'utilizado' => 'utilizado',
		'fecha_inicio' => 'fecha de inicio',
		'fecha_finalizacion' => 'fecha de finalizacion',
		'estado' => 'estado',
		'categoria_id' => 'categoria',
		'user_id' => 'usuario',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
		self::creating(function($model)
		{
			$user_id = Auth::id();
			$model->user_id = $user_id;
        });
		
		self::deleting(function($obj) {
			\Storage::disk('public_folder')->delete($obj->foto);
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
