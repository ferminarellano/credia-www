<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\UnidadMedidaRequest as StoreRequest;
use App\Http\Requests\UnidadMedidaRequest as UpdateRequest;

use App\Authorizable;

class UnidadMedidaCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $this->crud->setModel('App\Models\UnidadMedida');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/unidad_medida');
        $this->crud->setEntityNameStrings('unidad de medidas', 'Unidad Medidas');

		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Unidad de Medida',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha elaboración',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de unidad de medida",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la unidad de medida *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Unidad de Medida',
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
