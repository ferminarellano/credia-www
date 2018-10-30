<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\BannerRequest as StoreRequest;
use App\Http\Requests\BannerRequest as UpdateRequest;

class BannerCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Banner');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/banner');
        $this->crud->setEntityNameStrings('banner', 'banners');
		
		$this->crud->addColumn([
			'name' => 'indicador',
			'label' => 'Pertenece',
			'type' => 'select_from_array',
			'options' => ['fundacion' => 'Fundación', 'proyectos' => 'Proyectos', 'eventos' => 'Eventos', 'blog' => 'Blog',
						  'contacto'=> 'Contacto','voluntario'=> 'Voluntario','patrocinador'=> 'Patrocinador',
						  'equipo'=> 'Equipo','evento_detalle'=> 'Evento detalle','blog_detalle'=> 'Blog detalle',
						  'galeria'=> 'Galería','mision'=> 'Misión','faq'=> 'Preguntas Frecuentes','precio'=> 'Precios',
						  'servicio'=> 'Servicio'
						  ],
		]);
		
		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título'
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha elaboración',
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
			'name' => 'indicador',
			'label' => "Página",
			'type' => 'select_from_array',
			'options' => ['fundacion' => 'Fundación', 'proyectos' => 'Proyectos', 'eventos' => 'Eventos', 'blog' => 'Blog',
						  'contacto'=> 'Contacto','voluntario'=> 'Voluntario','patrocinador'=> 'Patrocinador',
						  'equipo'=> 'Equipo','evento_detalle'=> 'Evento detalle','blog_detalle'=> 'Blog detalle',
						  'galeria'=> 'Galería','mision'=> 'Misión','faq'=> 'Preguntas Frecuentes','precio'=> 'Precios',
						  'servicio'=> 'Servicio'
						  ],
			'allows_null' => true,
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
			'name' => 'descripcion',
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
