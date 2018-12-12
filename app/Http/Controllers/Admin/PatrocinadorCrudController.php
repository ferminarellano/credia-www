<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\PatrocinadorRequest as StoreRequest;
use App\Http\Requests\PatrocinadorRequest as UpdateRequest;

use App\Authorizable;

class PatrocinadorCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {

        $this->crud->setModel('App\Models\Patrocinador');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/patrocinador');
        $this->crud->setEntityNameStrings('patrocinador', 'patrocinadores');
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Nombre de patrocinador',
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de creación',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de patrocinador",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el patrocinador',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
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
