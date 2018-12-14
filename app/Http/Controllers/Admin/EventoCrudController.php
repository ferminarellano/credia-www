<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\EventoRequest as StoreRequest;
use App\Http\Requests\EventoRequest as UpdateRequest;

use App\Authorizable;

class EventoCrudController extends CrudController
{
	use Authorizable;
			
    public function setup()
    {
		
        $this->crud->setModel('App\Models\Evento');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/evento');
        $this->crud->setEntityNameStrings('evento', 'eventos');
		
		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título de evento',
		]);
		
		$this->crud->addColumn([
			'name' => 'fecha',
			'label' => 'Fecha de evento',
		]);
		
		$this->crud->addColumn([
			'name' => 'organizador',
			'label' => 'Organizador de evento',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación',
		]);
		
		/*---------------------------------------------------------*/
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título de evento",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el título *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'subtitulo',
			'label' => "Subtitulo de evento",
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
			'name' => 'fecha',
			'label' => "Fecha",
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
			'name' => 'horaInicio',
			'label' => "Hora inicio",
			'type' => 'time_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'horaFinal',
			'label' => "Hora finalización",
			'type' => 'time_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
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
		
		$this->crud->addField([
			'name' => 'organizador',
			'label' => "Organizador",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el organizador *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos de contacto',
		]);
		
		$this->crud->addField([
			'name' => 'correo',
			'label' => 'Correo de contacto',
			'type' => 'email',
			'attributes' => [
				'placeholder' => 'Correo * Ej: credia@gmail.com',
			],
			'suffix' => '@',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos de contacto',			
		]);
		
		$this->crud->addField([
			'name' => 'telefono',
			'label' => "Télefono de contacto",
			'type' => 'number',
			'attributes' => [
				'placeholder' => 'Télefono *',
			],
			'suffix' => '<span class="glyphicon glyphicon-earphone"></span>',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos de contacto',
		]);
		
		$this->crud->addField([
			'name' => 'direccion',
			'label' => 'Dirección de evento',
			'type' => 'address',
			'attributes' => [
				'placeholder' => 'Agregue la dirección del evento *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos de contacto',
		]);
		
		$this->crud->addField([
			'name' => 'latitud',
			'label' => 'Latitud',
			'type' => 'number',
			'attributes' => ["step" => "any"],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos de contacto',			
		]);
		
		$this->crud->addField([
			'name' => 'longitud',
			'label' => 'Longitud',
			'type' => 'number',
			'attributes' => ["step" => "any"],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
			'tab' => 'Datos de contacto',
		]);
		
		// $this->crud->addField([
			// 'name' => 'map_widget_crear',
			// 'type' => 'map_widget_crear',
			// 'tab' => 'Datos de contacto',
		// ],'create');
		
		// $this->crud->addField([
			// 'name' => 'map_widget_edit',
			// 'type' => 'map_widget_edit',
			// 'tab' => 'Datos de contacto',
		// ],'update');
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
