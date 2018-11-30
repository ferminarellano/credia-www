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

		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título de proyecto',
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => 'Estado del proyecto',
			'type' => 'select_from_array',
			'options' => ['no_iniciado' => 'No iniciado', 'en_proceso' => 'En proceso', 'finalizado' => 'Finalizaco'],
		]);
		
		$this->crud->addColumn([
			'name' => 'fecha_convenio',
			'label' => 'Fecha de convenio',
		]);
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título de proyecto",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el título *',
			],
			'suffix' => '<span class="glyphicon glyphicon-star"></span>',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
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
			'tab' => 'Datos generales',			
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => "Contenido",
			'type' => 'summernote',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'separator0',
			'type' => 'custom_html',
			'value' => '<hr>',
			'tab' => 'Datos generales',
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
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'presupuesto',
			'label' => 'Presupuesto',
			'type' => 'number',
			'prefix' => "L",
			'spinner' => False,
			'attributes' => [
				'placeholder' => 'Agregue la cantidad *',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'utilizado',
			'label' => 'Presupuesto utilizado',
			'type' => 'number',
			'prefix' => "L",
			'spinner' => False,
			'attributes' => [
				'placeholder' => 'Agregue la cantidad *',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'avance',
			'label' => 'Avence de proyecto',
		    'type' => 'range',
		    'min' => '0',
		    'max' => '100',
			'attributes' => [
				'placeholder' => 'Agregue la cantidad *',
			],
			'tab' => 'Datos generales',
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
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'estado',
			'label' => "Estado de proyecto",
			'type' => 'select2_from_array',
			'options' => ['no_iniciado' => 'No iniciado', 'en_proceso' => 'En proceso', 'finalizado' => 'Finalizaco'],
			'allows_null' => false,
			'default'    => 'no_iniciado',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'categoria_id',
			'label' => 'Categoría',
			'type' => "select2",
			'entity' => 'categoria',
			'attribute' => "nombre",
			'model' => "App\Models\Categoria",
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
			'tab' => 'Datos generales',
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
			'tab' => 'Datos generales',
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
