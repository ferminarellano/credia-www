<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ActividadRequest as StoreRequest;
use App\Http\Requests\ActividadRequest as UpdateRequest;

class ActividadCrudController extends CrudController
{
    public function setup()
    {
		
        $this->crud->setModel('App\Models\Actividad');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/actividad');
        $this->crud->setEntityNameStrings('actividad', 'actividads');

        $this->crud->addColumn([
			'name' => 'actividad',
			'label' => 'Nombre de actividad',
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => 'Estado',
			'type' => 'select_from_array',
			'options' => ['0' => 'Inactivo(a)', '1' => 'Activo(a)'],
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de registro',
		]);
		
		$this->crud->addField([
			'name' => 'actividad',
			'label' => "Nombre de actividad",
			'type' => 'text',
			'placeholder' => "Ingrese el nombre de la actividad",
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
