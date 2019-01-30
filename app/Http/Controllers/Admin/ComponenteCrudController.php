<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ComponenteRequest as StoreRequest;
use App\Http\Requests\ComponenteRequest as UpdateRequest;

use App\Authorizable;

class ComponenteCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $this->crud->setModel('App\Models\Componente');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/componente');
        $this->crud->setEntityNameStrings('componente', 'componentes');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Componente',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de registro',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de componente",
			'type' => 'text',
			'attributes' => [
				'placeholder' => "Ingrese el nombre del componente *",
			],
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
