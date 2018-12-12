<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\EquipoRequest as StoreRequest;
use App\Http\Requests\EquipoRequest as UpdateRequest;

use App\Authorizable;

class EquipoCrudController extends CrudController
{
	use Authorizable;
		
    public function setup()
    {

        $this->crud->setModel('App\Models\Equipo');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/equipo');
        $this->crud->setEntityNameStrings('equipo', 'equipo de trabajo');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre'
		]);
		
		$this->crud->addColumn([
			'name' => 'cargo',
			'label' => 'Cargo'
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación'
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],		
		]);
		
		$this->crud->addField([
			'name' => 'cargo',
			'label' => "Cargo dentro de la institución",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el cargo *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],		
		]);
		
		$this->crud->addField([
			'name' => 'separator',
			'type' => 'custom_html',
			'value' => '<hr>',
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
