<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\FotoRequest as StoreRequest;
use App\Http\Requests\FotoRequest as UpdateRequest;

use App\Authorizable;
use Auth;

class FotoCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		$user = Auth::user();
		
        $this->crud->setModel('App\Models\Foto');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/foto');
        $this->crud->setEntityNameStrings('foto', 'fotos');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Registro de foto'
		]);
		
		$this->crud->addColumn([
			'name' => 'album_id',
			'label' => 'Álbum',
			'type' => "select",
			'entity' => 'album',
			'attribute' => "nombre",
			'model' => "App\Models\Album",
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
			'label' => 'Descripción'
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación'
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => 'Registro de fotos',
			'type' => 'text',
			'attributes' => [
				'readonly' => 'readonly',
				'style' => 'font-size:30px;height:35px;',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		], 'update');
		
		$this->crud->addField([
			'name' => 'album_id',
			'label' => 'Álbum',
			'type' => "select2_foto",
			'entity' => 'album',
			'attribute' => "nombre",
			'model' => "App\Models\Album",
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
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
				'placeholder' => 'Agregue una breve descripción de las fotografías *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'fotos',
			'label' => "Fotos",
			'type' => 'upload_multiple',
			'upload' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Fotografías',
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
