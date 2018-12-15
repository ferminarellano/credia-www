<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\IndicadorRequest as StoreRequest;
use App\Http\Requests\IndicadorRequest as UpdateRequest;

use App\Authorizable;
use Auth;

class IndicadorCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		$user = Auth::user();
		
        $this->crud->setModel('App\Models\Indicador');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/indicador');
        $this->crud->setEntityNameStrings('indicador', 'indicadores');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Indicador',
		]);
		
		$this->crud->addColumn([
			'name' => 'tipo_indicador',
			'label' => 'Tipo de indicador',
			'type' => 'select_from_array',
			'options' => ['impacto' => 'Impacto', 'proceso' => 'Proceso','resultado' => 'Resultado'],
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha de elaboración',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Nombre de indicador",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre del indicador *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],		
		]);
		
		$this->crud->addField([
			'name' => 'tipo_indicador',
			'label' => "Tipo de indicador",
			'type' => 'select2_from_array',
			'options' => ['impacto' => 'Impacto', 'proceso' => 'Proceso','resultado' => 'Resultado'],
			'allows_null' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'evaluacion_tipo',
			'label' => "Tipo de evaluación",
			'type' => 'select2_from_array',
			'options' => ['cuantitativo' => 'Cuantitativo','cualitativo' => 'Cualitativo'],
			'allows_null' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => "Descripción de indicador",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción del indicador *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'frecuencia',
			'label' => "Frecuencia",
			'type' => 'select2_from_array',
			'options' => ['bimensual' => 'Bimensual', 'mensual' => 'Mensual', 'trimestral' => 'Trimestral',
						  'cuatrimestral' => 'Cuatrimestral', 'bianual' => 'Bianual', 'anual' => 'Anual', 
						  'bienal' => 'Bienal'],
			'allows_null' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'frecuencia_posteo',
			'label' => "Frecuencia de publicación",
			'type' => 'select2_from_array',
			'options' => ['mensual' => 'Mensual', 'trimestral' => 'Trimestral','cuatrimestral' => 'Cuatrimestral',
						  'bianual' => 'Bianual', 'anual' => 'Anual'],
			'allows_null' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			], 
		]);
		
		$this->crud->addField([
			'label' => 'Usuarios responsables',
			'type' => 'select2_multiple',
			'name' => 'users',
			'entity' => 'users',
			'attribute' => 'name',
			'model' => 'App\Models\User',
			'pivot' => true,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
				
		$this->crud->addField([
			'label' => 'Institución',
			'type' => 'select2',
			'name' => 'institucion_id', 
			'entity' => 'institucion', 
			'attribute' => 'nombre',
			'model' => 'App\Models\Institucion',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			], 
		]);
		
		$this->crud->addField([
			'label' => 'Unidad de medida',
			'type' => 'select2',
			'name' => 'unidad_medida_id', 
			'entity' => 'unidad_medida', 
			'attribute' => 'nombre',
			'model' => 'App\Models\UnidadMedida',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'protocolo_recoleccion',
			'label' => "Protocolo de recolección",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción del protocolo de recolección *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'calculo_indicador',
			'label' => "Cálculo de indicador",
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción del cálculo de indicador *',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '5',
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
