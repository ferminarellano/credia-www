<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ProyectoRequest as StoreRequest;
use App\Http\Requests\ProyectoRequest as UpdateRequest;

use App\Authorizable;

class ProyectoCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $this->crud->setModel('App\Models\Proyecto');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/proyecto');
        $this->crud->setEntityNameStrings('proyecto', 'proyectos');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";

		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título de proyecto',
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => 'Estado del proyecto',
			'type' => 'boolean',
			'options' => [0 => 'Borrador', 1 => 'Públicado'],
		]);
		
		$this->crud->addColumn([
			'name' => 'fecha_convenio',
			'label' => 'Fecha de convenio',
		]);
		
		$this->crud->addField([
			'name' => 'estado',
			'label' => '',
			'type' => 'toggleButtom_proyecto',
			'options' => [ 
						0 => "Borrador",
						1 => "Publicado",
					],
					'tab' => 'Contenido de proyecto',
		],'update');
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título de proyecto",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el título *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Contenido de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'subtitulo',
			'label' => "Subtitulo de proyecto",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el subtitulo *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Contenido de proyecto',			
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción de proyecto",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue una breve descripción del proyecto *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
			'tab' => 'Contenido de proyecto',
		]);
		
		$this->crud->addField([
			'label' => "Categoría",
			'type' => 'select2_multiple',
			'name' => 'categorias',
			'entity' => 'categorias',
			'attribute' => 'nombre', 
			'model' => "App\Models\Categoria", 
			'pivot' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
			'tab' => 'Contenido de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'separator0',
			'type' => 'custom_html',
			'value' => '<hr>',
			'tab' => 'Contenido de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => "Contenido",
			'type' => 'summernote',
			'tab' => 'Contenido de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'fecha_convenio',
			'label' => "Fecha de convenio",
			'type' => 'date_picker',
			'attributes' => [
				'placeholder' => 'Agregue la fecha *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'date_picker_options' => [
				'todayBtn' => true,
				'format' => 'dd-mm-yyyy',
				'language' => 'es'
			],
			'tab' => 'Datos de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'presupuesto',
			'label' => 'Presupuesto',
			'type' => 'number',
			'spinner' => False,
			'prefix' => "L",
			'default' => '0.00',
			'attributes' => [
				'placeholder' => 'Agregue la cantidad *',
			],
			'tab' => 'Datos de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'avance',
			'label' => 'Avence de proyecto',
		    'type' => 'range',
		    'min' => '0',
		    'max' => '100',
		    'default' => '0',
			'tab' => 'Datos de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'event_date_range',
			'start_name' => 'fecha_inicio', 
			'end_name' => 'fecha_finalizacion',
			'label' => 'Inicio y finalización de proyecto',
			'type' => 'date_range',
			'start_default' => '2018-10-22',
			'end_default' => '2018-10-22',
			'date_range_options' => [ 
				'timePicker' => false,
				'locale' => ['format' => 'DD/MM/YYYY']
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos de proyecto',
		]);
		
		$this->crud->addField([
			'label' => "Patrocinadores",
			'type' => 'select2_multiple',
			'name' => 'patrocinadores',
			'entity' => 'patrocinadores',
			'attribute' => 'nombre', 
			'model' => "App\Models\Patrocinador",
			'pivot' => true, 
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos de proyecto',
		]);
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Fotografía',
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
