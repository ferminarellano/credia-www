<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Filterable_model extends Model
{
	protected static  $_campoFiltro;
	protected static  $_valoresFiltro;
	
	public static function setCampoFiltro($campo)
	{
		static::$_campoFiltro = $campo;
	}
	
	public static function setValoresFiltro($listaValores)
	{
		static::$_valoresFiltro = $listaValores;
	}
	
    protected static function boot()
    {
        parent::boot();
		
		if(isset(static::$_valoresFiltro))
		{
			static::addGlobalScope('accessiblex'.static::$_campoFiltro, function (Builder $builder) {
				$builder->whereIn(static::$_campoFiltro, static::$_valoresFiltro);
			});
		}
    }
	
}