<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'videos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','album_id','url_video','descripcion','secuencia'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['url_video'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'album_id' => 'album',
		'url_video' => 'url de video',
		'descripcion' => 'descripcion',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
        self::creating(function($model)
		{
			$secuencia = Video::all()->max('secuencia');
			$prefix = Video::get_prefix();
			$suffix = $secuencia ? ($secuencia+1) : 1;
			
			$model->nombre = $prefix . str_pad($suffix, 7, "0", STR_PAD_LEFT);
			$model->secuencia = $suffix;
        });
		
		self::deleting(function($obj) {	
			
        });
    }
	
	private static function get_prefix()
	{
		return "VIDEO-";
	}
	
	public function identifiableName()
    {
        return $this->nombre;
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function album()
	{
		return $this->belongsTo('App\Models\Album');
	}
	
    /*-------------------------------------------------------------------------
    | SCOPES
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | ACCESORS
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | MUTATORS
    |------------------------------------------------------------------------*/
}
