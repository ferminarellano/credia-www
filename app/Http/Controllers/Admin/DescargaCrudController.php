<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\DescargaRequest as StoreRequest;
use App\Http\Requests\DescargaRequest as UpdateRequest;

use App\Authorizable;

class DescargaCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $this->crud->setModel('App\Models\Descarga');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/descarga');
        $this->crud->setEntityNameStrings('descarga', 'descargas');

        $this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Registro de archivo'
		]);
		
		$this->crud->addColumn([
			'label' => "Componentes",
		    'type' => "select_multiple",
		    'name' => 'componentes', 
		    'entity' => 'componentes',
		    'attribute' => "nombre", 
		    'model' => "App\Models\Componente", 
		]);
		
		$this->crud->addColumn([
			'name' => 'descripcion',
			'label' => 'Descripción',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => 'Registro de archivos',
			'type' => 'text',
			'attributes' => [
				'readonly' => 'readonly',
				'style' => 'font-size: 30px; height: 35px;',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		], 'update');
		
		$this->crud->addField([
			'label' => "Componentes",
			'type' => 'select2_multiple',
			'name' => 'componentes', 
			'entity' => 'componentes',
			'attribute' => 'nombre',
			'model' => "App\Models\Componente",
			'pivot' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'label' => "Actividades",
			'type' => 'select2_multiple',
			'name' => 'actividades', 
			'entity' => 'actividades',
			'attribute' => 'titulo',
			'model' => "App\Models\Actividad",
			'pivot' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue una breve descripción de los archivos *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'archivos',
			'label' => "Archivos",
			'type' => 'upload_multiple_file',
			'upload' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Archivos',
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
