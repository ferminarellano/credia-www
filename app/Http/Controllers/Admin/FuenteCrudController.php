<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\FuenteRequest as StoreRequest;
use App\Http\Requests\FuenteRequest as UpdateRequest;

use App\Authorizable;

class FuenteCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {

        $this->crud->setModel('App\Models\Fuente');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/fuente');
        $this->crud->setEntityNameStrings('fuente', 'fuentes');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'fuente',
			'label' => 'Indicador',
		]);
		
		$this->crud->addColumn([
			'label' => "Institución", 
			'type' => "select",
		    'name' => 'institucion_id',
		    'entity' => 'institucion', 
		    'attribute' => "nombre",
		    'model' => "App\Models\Institucion", 
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de elaboración',
		]);
		
		$this->crud->addField([
			'name' => 'fuente',
			'label' => "Nombre",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre de la fuente *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],		
		]);
		
		$this->crud->addField([
			'label' => 'Institución',
			'type' => 'select2',
			'name' => 'institucion_id', 
			'entity' => 'institucion', 
			'attribute' => 'nombre',
			'model' => 'App\Models\Institucion',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
