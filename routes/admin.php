<?php
	
	Route::get('crear-permisos/','PermissionCrudController@crear_permisos');
	
	CRUD::resource('banner', 'BannerCrudController');
	CRUD::resource('voluntario', 'VoluntarioCrudController');
	CRUD::resource('actividad', 'ActividadCrudController');
	CRUD::resource('contacto', 'ContactoCrudController');
	CRUD::resource('social', 'SocialCrudController');
	CRUD::resource('blog', 'BlogCrudController');
	CRUD::resource('categoria', 'CategoriaCrudController');
	CRUD::resource('evento', 'EventoCrudController');
	CRUD::resource('patrocinador', 'PatrocinadorCrudController');
	CRUD::resource('proyecto', 'ProyectoCrudController');
	CRUD::resource('faq', 'FaqCrudController');
	CRUD::resource('equipo', 'EquipoCrudController');
	CRUD::resource('fotovoluntario', 'FotoVoluntarioCrudController');
	CRUD::resource('sistema', 'SistemaCrudController');
	
	CRUD::resource('user', 'UserCrudController');
	CRUD::resource('role', 'RoleCrudController');
	
	CRUD::resource('indicador', 'IndicadorCrudController');
	CRUD::resource('institucion', 'InstitucionCrudController');
	CRUD::resource('unidadmedida', 'UnidadMedidaCrudController');
	CRUD::resource('fuente', 'FuenteCrudController');
	CRUD::resource('dataindicador', 'DataIndicadorCrudController');
	
	