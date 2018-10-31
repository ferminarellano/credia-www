<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ContactoRequest as StoreRequest;
use App\Http\Requests\ContactoRequest as UpdateRequest;

class ContactoCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Contacto');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/contacto');
        $this->crud->setEntityNameStrings('contacto', 'contactos');
		$this->crud->allowAccess(['show']);
		$this->crud->denyAccess(['update','revisions']);
		$this->crud->removeButton('create');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre',
		]);
		
		$this->crud->addColumn([
			'name' => 'correo',
			'label' => 'Correo',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de elaboración',
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