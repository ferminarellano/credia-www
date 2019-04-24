<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\DataIndicadorRequest as StoreRequest;
use App\Http\Requests\DataIndicadorRequest as UpdateRequest;

use App\Authorizable;
use Auth;

class DataIndicadorCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		$user = Auth::user();
		
        $this->crud->setModel('App\Models\DataIndicador');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/dataindicador');
        $this->crud->setEntityNameStrings('datos indicador', 'datos indicadores');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'indicador_id',
			'label' => 'Indicador',
			'type' => "select",
			'entity' => 'indicador',
			'attribute' => "nombre",
			'model' => "App\Models\Indicador",
		]);
		
		$this->crud->addColumn([
			'name' => 'fuente_id',
			'label' => 'Fuente de información',
			'type' => "select",
			'entity' => 'fuente',
			'attribute' => "fuente",
			'model' => "App\Models\Fuente",
		]);
		
		$this->crud->addColumn([
			'name' => 'estado',
			'label' => 'Estado',
			'type' => 'boolean',
			'options' => [0 => 'Borrador', 1 => 'Públicado'],
		]);
		
		$this->crud->addColumn([
			'name' => 'fecha_aprovacion',
			'label' => 'Fecha aprobación',
			'type' => "date",
			'format' => 'l j F Y',
		]);
		
	/*============================================================*/
		
		if($user->hasRole('Super Administrador'))
		{		
			$this->crud->addField([
				'name' => 'estado',
				'label' => '',
				'type' => 'toggleButtom_indicador',
				'options' => [ 
							0 => "Borrador",
							1 => "Publicado",
						],
			],'update');
		}
		
		$this->crud->addField([
			'label' => 'Indicador',
			'type' => 'select2',
			'name' => 'indicador_id',
			'entity' => 'indicador',
			'attribute' => 'nombre',
			'model' => 'App\Models\Indicador',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'fecha_inicio',
			'type' => 'datetime_picker',
			'label' => 'Fecha de inicio',
			'date_picker_options' => [
				'format' => 'DD/MM/YYYY HH:mm',
				'language' => 'es'
			],
			'attributes' => [
				'placeholder' => 'Seleccione la fecha de inicio *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'fecha_final',
			'type' => 'datetime_picker',
			'label' => 'Fecha de finalización',
			'date_picker_options' => [
				'format' => 'DD/MM/YYYY HH:mm',
				'language' => 'es'
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'valor',
			'label' => "Valor",
			'type' => 'number',
			'attributes' => [
				'placeholder' => 'Ingrese valor *',
				'step' => "any"
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'uom_id',
			'label' => "Unidad de Media",
			'type' => 'select2',
			'entity' => 'uom',
			'attribute' => 'nombre',
			'model' => 'App\Models\UnidadMedida',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'zona_id',
			'label' => "Zona Geográfica",
			'type' => 'select2',
			'entity' => 'zona',
			'attribute' => 'nombre',
			'model' => 'App\Models\Zona_geografica',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		// $this->crud->addField([
			// 'name' => 'fecha_aprovacion',
			// 'type' => 'date_picker',
			// 'label' => 'Fecha de aprobación',
			// 'date_picker_options' => [
				// 'todayBtn' => true,
				// 'format' => 'dd-mm-yyyy',
				// 'language' => 'es'
			// ],
			// 'attributes' => [
				// 'placeholder' => 'Seleccione la fecha de aprobación *',
			// ],
			// 'wrapperAttributes' => [
				// 'class' => 'form-group col-md-6',
			// ],
		// ]);
		
		$this->crud->addField([
			'label' => 'Fuente de información',
			'type' => 'select2',
			'name' => 'fuente_id',
			'entity' => 'fuente',
			'attribute' => 'fuente',
			'model' => 'App\Models\Fuente',
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
