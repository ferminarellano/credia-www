<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\EventoRequest as StoreRequest;
use App\Http\Requests\EventoRequest as UpdateRequest;

class EventoCrudController extends CrudController
{
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
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título de evento",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el título del evento',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'subtitulo',
			'label' => "Descripción de evento",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la descripción del evento',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'contenido',
			'label' => "Segundo parrafo",
			'type' => 'summernote',
		]);
		
		$this->crud->addField([
			'name' => 'fecha',
			'label' => "Fecha",
			'type' => 'date_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'date_picker_options' => [
				'todayBtn' => true,
				'format' => 'dd-mm-yyyy',
				'language' => 'es'
			],			
		]);
		
		$this->crud->addField([
			'name' => 'horaInicio',
			'label' => "Hora inicio evento",
			'type' => 'time_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],			
		]);
		
		$this->crud->addField([
			'name' => 'horaFinal',
			'label' => "Hora finalización evento",
			'type' => 'time_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],			
		]);
		
		$this->crud->addField([
			'name' => 'direccion',
			'label' => 'Dirección de evento',
			'type' => 'address',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],			
		]);
		
		$this->crud->addField([
			'name' => 'telefono',
			'label' => "Télefono de contacto",
			'type' => 'number',
			'attributes' => [
				'placeholder' => 'Agregue télefono de contacto',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'correo',
			'label' => 'Correo de contacto',
			'type' => 'address',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],			
		]);
		
		$this->crud->addField([
			'name' => 'organizador',
			'label' => "Organizador de evento",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre del organizador',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'latitud',
			'label' => 'Latitud',
			'type' => 'number',
			'attributes' => ["step" => "any"],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],			
		]);
		
		$this->crud->addField([
			'name' => 'longitud',
			'label' => 'Longitud',
			'type' => 'number',
			'attributes' => ["step" => "any"],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],			
		]);
		
		$this->crud->addField([
			'name' => 'mision',
			'label' => "Información relevante sobre el evento",
			'type' => 'summernote',
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
