<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\SistemaRequest as StoreRequest;
use App\Http\Requests\SistemaRequest as UpdateRequest;

class SistemaCrudController extends CrudController
{
    public function setup()
    {
		
        $this->crud->setModel('App\Models\Sistema');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/sistema');
        $this->crud->setEntityNameStrings('sistema', 'sistemas');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'texto_mini',
			'label' => 'Biblioteca'
		]);
		
		$this->crud->addColumn([
			'name' => 'nombre_sistema',
			'label' => 'Sistema'
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación'
		]);
		
		$this->crud->addField([
			'name' => 'estado',
			'label' => '',
			'type' => 'toggleButtom_sistema',
			'options' => [ 
						0 => "Borrador",
						1 => "Publicado",
					],
		],'update');
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía/Logo",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'separator0',
			'type' => 'custom_html',
			'value' => '<hr>',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'texto_mini',
			'label' => "Biblioteca",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el texto de la biblioteca *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'nombre_sistema',
			'label' => "Sistema",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre del sistema *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción del sistema",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción del sistema *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '4',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'url',
			'label' => "Dirección url",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la url de redireccionamiento al sistema *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => "Contenido del sistema",
			'type' => 'summernote',
			'tab' => 'Detalle de sistema',
		]);
		
		$this->crud->addField([
			'name' => 'fotos',
			'label' => "Fotografías de sistema",
			'type' => 'upload_multiple',
			'upload' => true,
			'tab' => 'Detalle de sistema',
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
