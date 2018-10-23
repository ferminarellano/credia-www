<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\VoluntarioRequest as StoreRequest;
use App\Http\Requests\VoluntarioRequest as UpdateRequest;

class VoluntarioCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Voluntario');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/voluntario');
        $this->crud->setEntityNameStrings('voluntario', 'voluntarios');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre',
		]);
		
		$this->crud->addColumn([
			'name' => 'correo',
			'label' => 'Correo',
		]);
		
		$this->crud->addColumn([
			'name' => 'actividad_id',
			'label' => 'Actividad a participar',
			'type' => "select",
			'entity' => 'actividad',
			'attribute' => "actividad",
			'model' => "App\Models\Actividad",
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de registro',
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
