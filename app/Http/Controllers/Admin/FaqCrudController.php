<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\FaqRequest as StoreRequest;
use App\Http\Requests\FaqRequest as UpdateRequest;

use App\Authorizable;

class FaqCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $this->crud->setModel('App\Models\Faq');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/faq');
        $this->crud->setEntityNameStrings('pregunta', 'preguntas frecuentes');

        $this->crud->addColumn([
			'name' => 'pregunta',
			'label' => 'Pregunta',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación',
		]);
		
		$this->crud->addField([
			'name' => 'pregunta',
			'label' => "Pregunta",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la pregunta del artículo *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],		
		]);
		
		$this->crud->addField([
			'name' => 'respuesta',
			'label' => "Respuesta",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la respuesta *',
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
