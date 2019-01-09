<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ActividadVoluntarioRequest as StoreRequest;
use App\Http\Requests\ActividadVoluntarioRequest as UpdateRequest;

use App\Authorizable;

class ActividadVoluntarioCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $this->crud->setModel('App\Models\ActividadVoluntario');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/actividadvoluntario');
        $this->crud->setEntityNameStrings('actividad', 'actividades voluntarios');

        $this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'actividad',
			'label' => 'Nombre de actividad',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de registro',
		]);
		
		$this->crud->addField([
			'name' => 'actividad',
			'label' => "Nombre de actividad",
			'type' => 'text',
			'attributes' => [
				'placeholder' => "Ingrese el nombre de la actividad *",
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
