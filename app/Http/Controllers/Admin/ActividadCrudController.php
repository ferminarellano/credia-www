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
			'name' => 'titulo',
			'label' => 'Actividad',
		]);
		
		$this->crud->addColumn([
			'label' => 'Componente',
			'type' => "select",
			'name' => 'componente_id',
			'entity' => 'componente',
			'attribute' => "nombre",
			'model' => "App\Models\Componente",
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
					'tab' => 'Datos generales',	
		],'update');
		
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
			'tab' => 'Datos generales',	
		]);
		
		$this->crud->addField([
			'label' => "Componente",
			'type' => 'select2',
			'name' => 'componente_id', 
			'entity' => 'componente',
			'attribute' => 'nombre', 
			'model' => "App\Models\Componente",
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',	
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
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => "Contenido de la actividad",
			'type' => 'summernote',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'icono',
			'label' => "Icono",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Icono de actividad',
		]);
		
		$this->crud->addField([
			'name' => 'galeria',
			'label' => "Fotografías",
			'type' => 'upload_multiple',
			'upload' => true,
			'tab' => 'Galería',
		]);
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
		$this->insertIndicador($this->crud->entry);
        return $redirect_location;
    }
	
	public function insertIndicador($componente)
	{
		$nombre = $componente->componente()->first()->nombre;		
		$componente->indicador = strtolower($nombre);
		$componente->save();
	}

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
		$this->insertIndicador($this->crud->entry);
        return $redirect_location;
    }
}
