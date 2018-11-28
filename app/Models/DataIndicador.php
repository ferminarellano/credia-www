<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\User;

class DataIndicador extends Model
{
    use CrudTrait;

    protected $table = 'data_indicadores';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['indicador_id','fecha_inicio','fecha_final','valor','estado',
						   'fecha_aprovacion','created_user_id','updated_user_id',
						   'institucion_id','fuente_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
		parent::boot();
		
		self::creating(function($model)
		{
			$user_id = Auth::id();
			
			$model->created_user_id = $user_id;
			$model->updated_user_id = $user_id;
        });
		
		self::updating(function($model)
		{
			$user_id = Auth::id();
			$model->updated_user_id = $user_id;
        });
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function institucion()
	{
		return $this->belongsTo('App\Models\Institucion', 'institucion_id');
	}
	
	public function fuente()
	{
		return $this->belongsTo('App\Models\Fuente', 'fuente_id');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function indicador()
	{
		return $this->belongsTo('App\Models\Indicador', 'indicador_id');
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
