<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ActividadRequest as StoreRequest;
use App\Http\Requests\ActividadRequest as UpdateRequest;

use App\Authorizable;

class ActividadCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		
        $this->crud->setModel('App\Models\Actividad');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/actividad');
        $this->crud->setEntityNameStrings('actividad', 'actividades');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
        $this->crud->addColumn([
			'name' => 'actividad',
			'label' => 'Nombre de actividad',
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => 'Estado',
			'type' => 'select_from_array',
			'options' => ['0' => 'Borrador', '1' => 'Publicado'],
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de registro',
		]);
		
		$this->crud->addField([
			'name' => 'estado',
			'label' => '',
			'type' => 'toggleButtom_actividad',
			'options' => [ 
						0 => "Borrador",
						1 => "Publicado",
					],
		],'update');
		
		$this->crud->addField([
			'name' => 'actividad',
			'label' => "Nombre de actividad",
			'type' => 'text',
			'attributes' => [
				'placeholder' => "Ingrese el nombre de la actividad *",
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'separator0',
			'type' => 'custom_html',
			'value' => '<hr>',
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título de actividad",
			'type' => 'text',
			'attributes' => [
				'placeholder' => "Ingrese el título de la actividad *",
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción de actividad",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción de la actividad *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '4',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => "Contenido de la actividad",
			'type' => 'summernote',
		]);
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
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
