<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
	use CrudTrait; 
    use HasRoles;
	use \Venturecraft\Revisionable\RevisionableTrait;
	
	protected $primaryKey = 'id';
	
    protected $fillable = ['name','email','password','institucion_id','foto'];

    protected $hidden = ['password','remember_token'];
	
	protected $visible = ['foto'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'name' => 'nombre usuario',
		'email' => 'correo',
		'password' => 'contraseña',
		'institucion_id' => 'institución',
		'foto' => 'fotografía',
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

    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function blogs(){
		return $this->hasMany('App\Models\Blog');
	}
	
	public function proyectos(){
		return $this->hasMany('App\Models\Proyecto');
	}
	
	public function indicadores()
	{
		return $this->belongsToMany('App\Models\Indicador','indicador_user','user_id');
	}
	
	public function institucion()
	{
		return $this->belongsTo('App\Models\Institucion', 'institucion_id');
	}
	
	public function data_indicadores()
	{
		return $this->hasMany('App\Models\DataIndicador');
	}
	
	/*------------------------------------------------------------------------
    | MUTATORS
    |-----------------------------------------------------------------------*/
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "images/fotos-usuarios";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
	
}
