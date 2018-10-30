<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\SocialRequest as StoreRequest;
use App\Http\Requests\SocialRequest as UpdateRequest;

class SocialCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Social');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/social');
        $this->crud->setEntityNameStrings('social', 'socials');
		
		$this->crud->addColumn([
			'name' => 'red',
			'label' => 'Nombre de red',
		]);
		
		$this->crud->addColumn([
			'name' => 'link',
			'label' => 'Dirección url',
		]);
		
		$this->crud->addField([
			'name' => 'red',
			'label' => "Nombre de red",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre de red social',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'link',
			'label' => "Dirección de url",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la dirección url de la red social',
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
