<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\CategoriaRequest as StoreRequest;
use App\Http\Requests\CategoriaRequest as UpdateRequest;

class CategoriaCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\Categoria');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/categoria');
        $this->crud->setEntityNameStrings('categoria', 'categorias');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre de categoría'
		]);
		
		$this->crud->addColumn([
			'name' => 'descripcion',
			'label' => 'Descripción de categoría',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de elaboración',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de categoría",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre de la categoría.',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción de categoría",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción de la categoría.',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
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
