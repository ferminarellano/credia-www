<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Componente extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'componentes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre'];
    // protected $hidden = [];
    // protected $dates = [];
	// protected $visible = [];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre de componente',
	);
	
	/*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
        self::creating(function($model){
			
        });
		
		self::updating(function($model){
			
        });
		
        self::deleting(function($obj) {
          
        });
    
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function actividades()
	{
		return $this->hasMany('App\Models\Actividad','componente_id');
	}
	
	public function fotos()
	{
		return $this->belongsToMany('App\Models\Foto','foto_componente','componente_id');
	}
	
	public function videos()
	{
		return $this->belongsToMany('App\Models\Video','video_componente','componente_id');
	}
	
	public function descargas()
	{
		return $this->belongsToMany('App\Models\Descarga','descarga_componente','componente_id');
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
