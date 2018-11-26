<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Models\Role as OriginalRole;
use Illuminate\Support\Facades\Auth;

class Role extends OriginalRole
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $fillable = ['name', 'guard_name', 'updated_at', 'created_at'];
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'name' => 'nombre de rol',
	);

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
		parent::boot();
    }
}
