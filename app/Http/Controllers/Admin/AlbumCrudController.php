<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\AlbumRequest as StoreRequest;
use App\Http\Requests\AlbumRequest as UpdateRequest;

use App\Authorizable;
use Auth;

class AlbumCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		$user = Auth::user();
		
        $this->crud->setModel('App\Models\Album');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/album');
        $this->crud->setEntityNameStrings('álbum', 'álbumes');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre'
		]);
		
		$this->crud->addColumn([
			'name' => 'tipo',
			'label' => "Tipo de álbum",
			'type' => 'select_from_array',
			'options' => ['fotos' => 'Fotos', 'videos' => 'Videos'],
		]);
		
		$this->crud->addColumn([
			'name' => 'descripcion',
			'label' => 'Descripción'
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => "Estado",
			'type' => 'select_from_array',
			'options' => ['0' => 'Borrador', '1' => 'Publicado'],
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Frecha de creación'
		]);
		
		$this->crud->addField([
			'name' => 'estado',
			'label' => '',
			'type' => 'toggleButtom_album',
			'options' => [ 
						0 => "Borrador",
						1 => "Publicado",
					],	
		],'update');
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Título",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el título del álbum *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
		]);
		
		$this->crud->addField([
			'name' => 'tipo',
			'label' => "Tipo de álbum",
			'type' => 'select2_from_array',
			'options' => ['fotos' => 'Fotos', 'videos' => 'Videos'],
			'allows_null' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'fecha',
			'label' => "Fecha del álbum",
			'type' => 'date_picker',		
			'date_picker_options' => [
				'todayBtn' => true,
				'format' => 'dd-mm-yyyy',
				'language' => 'es'
			],
			'attributes' => [
				'placeholder' => 'Agregue la fecha *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue una breve descripción del álbum *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
		]);
		
		$this->crud->addField([
			'name' => 'cover',
			'label' => "Portada",
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
