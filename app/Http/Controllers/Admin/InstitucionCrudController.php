<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\InstitucionRequest as StoreRequest;
use App\Http\Requests\InstitucionRequest as UpdateRequest;

use App\Authorizable;

class InstitucionCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		
        $this->crud->setModel('App\Models\Institucion');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/institucion');
        $this->crud->setEntityNameStrings('institucion', 'instituciones');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Institución',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha elaboración',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de institución",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la institución *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Institución',
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
