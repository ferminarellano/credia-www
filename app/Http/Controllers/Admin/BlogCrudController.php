<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\BlogRequest as StoreRequest;
use App\Http\Requests\BlogRequest as UpdateRequest;

class BlogCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Blog');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/blog');
        $this->crud->setEntityNameStrings('blog', 'blogs');
		
		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título'
		]);
		
		$this->crud->addColumn([
			'name' => 'categoria_id',
			'label' => 'Categoría',
			'type' => "select",
			'entity' => 'categoria',
			'attribute' => "nombre",
			'model' => "App\Models\Categoria",
		]);
		
		$this->crud->addColumn([
			'name' => 'fecha',
			'label' => 'Fecha'
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => 'Estado',
			'type' => 'boolean',
			'options' => [0 => 'Borrador', 1 => 'Públicado'],
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título",
			'type' => 'text',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'subtitulo',
			'label' => "Subtítulo",
			'type' => 'text',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'categoria_id',
			'label' => 'Categoría',
			'type' => "select2",
			'entity' => 'categoria',
			'attribute' => "nombre",
			'model' => "App\Models\Categoria",
			'wrapperAttributes' => [
				'class' => 'form-group col-md-8',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'fecha',
			'label' => "Fecha",
			'type' => 'date_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-4',
			],
			'date_picker_options' => [
				'todayBtn' => true,
				'format' => 'dd-mm-yyyy',
				'language' => 'es'
			],			
		]);
		
		$this->crud->addField([
			'name' => 'contenido_1',
			'label' => "Segundo parrafo",
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
