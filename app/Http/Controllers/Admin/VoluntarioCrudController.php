<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\VoluntarioRequest as StoreRequest;
use App\Http\Requests\VoluntarioRequest as UpdateRequest;

class VoluntarioCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Voluntario');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/voluntario');
        $this->crud->setEntityNameStrings('voluntario', 'voluntarios');
		$this->crud->allowAccess(['show']);
		$this->crud->denyAccess(['update','revisions']);
		$this->crud->removeButton('create');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre de aspirante',
		]);
		
		$this->crud->addColumn([
			'name' => 'correo',
			'label' => 'Correo',
		]);
		
		$this->crud->addColumn([
			'name' => 'actividad_id',
			'label' => 'Actividad a participar',
			'type' => "select",
			'entity' => 'actividad',
			'attribute' => "actividad",
			'model' => "App\Models\Actividad",
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de registro',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de aspirante",
			'type' => 'text',
			'attributes' => [
				'disabled' => 'disabled',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-8',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'actividad_id',
			'label' => "Actividad a participar",
			'type' => 'select',
			'entity' => 'actividad',
			'attribute' => "actividad",
			'model' => "App\Models\Actividad",
			'attributes' => [
				'disabled' => 'disabled', 
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-4',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'correo',
			'label' => "Correo de aspirante",
			'type' => 'text',
			'attributes' => [
				'disabled' => 'disabled',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-8',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción de aspirante",
			'type' => 'textarea',
			'attributes' => [
				'disabled' => 'disabled',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '4'
			],
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
