<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Social extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;
	
    protected $table = 'redes_sociales';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['red','url'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'red' => 'red',
		'url' => 'url',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
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
}
