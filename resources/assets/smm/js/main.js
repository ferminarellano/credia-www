import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {FormSet, Select} from './components/forms';

require('./bootstrap');

import Wizard from './components/wizard';
		
let steps = [
	{
		id: 1, 
		title: "Indicador",
		helptext: "Seleccione los indicadores que desea consultar.",
		name: "Indicador",
		formset: [
			{
				type: "Select",
				id: "indicadorSelect",
				label: "Indicador",
				classNames: ["select2","form-control"],
				name: "indicadores[]",
				multiple: "multiple",
				xhr: "smm/indicadores",
				xhr_param: false
			}
		]
	},
	{
		id: 2,
		name: "Área Geográfica",
		title: "Área Geográfica",
		helptext: "Seleccione las áreas geográficas a consultar.",
		formset: [
			{
				type: "Select",
				id: "zonaPais",
				label: "País",
				classNames: ["select2","form-control"],
				name: "pais[]",
				xhr: "smm/zona-geografica/1",
				xhr_param: false,
				value: [1],
				multiple: "multiple",
				nullable: true,
				chained: "departamentos[]",
				chainedNoun: "Departamentos",
			},
			{
				type: "Select",
				id: "zonaDepartamento" ,
				label: "Departamento(s)" ,
				classNames: ["select2","form-control"],
				hidden: true,
				name: "departamentos[]",
				xhr: "smm/zona-geografica/2",
				xhr_param: false,
				multiple: "multiple",
				nullable: true,
				chained: "municipios[]",
				chainedNoun: "Municipios",
			},
			{
				type: "Select",
				id: "zonaMunicipio" ,
				label: "Municipio(s)" ,
				classNames: ["select2","form-control"],
				hidden: true,
				name: "municipios[]",
				xhr: "smm/zona-geografica/3",
				xhr_param: false,
				multiple: "multiple",
				nullable: true
			}
		]
	}, 
	{
		id: 3, 
		name: "Periodo",
		title: "Periodo",
		helptext: "Seleccione el periodo de tiempo a consultar.",
		formset: [
			{
				type: "Select",
				id: "periodoNivelSelect",
				label: "Nivel",
				classNames: ["select2","form-control"],
				name: "periodos[]", 
				options: [
					{
						id: 2007,
						label: '2007',
						value: '2007'
					},
					{
						id: 2008,
						label: '2008',
						value: '2008'
					},
					{
						id: 2009,
						label: '2009',
						value: '2009'
					},
					{
						id: 2010,
						label: '2010',
						value: '2010'
					},
					{
						id: 2011,
						label: '2011',
						value: '2011'
					},
					{
						id: 2012,
						label: '2012',
						value: '2012'
					},
					{
						id: 2013,
						label: '2013',
						value: '2013'
					},
					{
						id: 2014,
						label: '2014',
						value: '2014'
					},
					{
						id: 2015,
						label: '2015',
						value: '2015'
					},
					{
						id: 2016,
						label: '2016',
						value: '2016'
					},
					{
						id: 2017,
						label: '2017',
						value: '2017'
					},
					{
						id: 2018,
						label: '2018',
						value: '2018'
					}

				],
				nullable: true,
				multiple: "multiple"
			}
		]
	}
];

ReactDOM.render(
	<Wizard 
		steps={steps} 
		action='smm/buscar'
	/>, 
	document.getElementById('wizard-react')
);

