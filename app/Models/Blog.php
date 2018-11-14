<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use CrudTrait;

    protected $table = 'blog_posts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['foto','titulo','subtitulo','fecha','contenido_1',
						   'estado','categoria_id','user_id','total_vista'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];

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
		
		self::updating(function($model)
		{
			$user_id = Auth::id();

			$model->user_id = $user_id;
        });
		
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
    |-----------------------------------------------------------------------*/
	
	public function blogcomments()
	{
		return $this-> hasMany('App\Models\BlogComment');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function categoria()
	{
		return $this->belongsTo('App\Models\Categoria');
	}
	
    /*------------------------------------------------------------------------
    | SCOPES
    |-----------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | ACCESORS
    |-----------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | MUTATORS
    |-----------------------------------------------------------------------*/
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "images/blog-articles-photos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
