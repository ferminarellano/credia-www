<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


use App\Http\Requests\SliderRequest as StoreRequest;
use App\Http\Requests\SliderRequest as UpdateRequest;

class SliderCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Slider');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/slider');
        $this->crud->setEntityNameStrings('slider', 'sliders');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'secuencia',
			'label' => 'Secuencia',
		]);
		
		$this->crud->addColumn([
			'name' => 'indicador',
			'label' => 'Pertenece',
			'type' => 'select_from_array',
			'options' => ['inicio' => 'Inicio', 'fundacion' => 'Fundación', 'proyectos' => 'Proyectos', 'eventos' => 'Eventos', 'blog' => 'Blog'],
		]);
		
		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título'
		]);
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
		]);
		
		$this->crud->addField([
			'name' => 'separator',
			'type' => 'custom_html',
			'value' => '<hr>'
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título",
			'type' => 'text',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-8',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'secuencia',
			'label' => "Secuencia",
			'type' => 'number',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-4',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => 'Descripción',
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción de la imagen',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '4'
			]
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
