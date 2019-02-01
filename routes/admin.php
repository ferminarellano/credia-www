<?php
	
	Route::get('crear-permisos/','PermissionCrudController@crear_permisos');
	
	CRUD::resource('actividad', 'ActividadCrudController');
	CRUD::resource('actividadvoluntario', 'ActividadVoluntarioCrudController');
	CRUD::resource('album', 'AlbumCrudController');
	CRUD::resource('banner', 'BannerCrudController');
	CRUD::resource('blog', 'BlogCrudController');
	CRUD::resource('categoria', 'CategoriaCrudController');
	CRUD::resource('contacto', 'ContactoCrudController');
	CRUD::resource('componente', 'ComponenteCrudController');
	CRUD::resource('dataindicador', 'DataIndicadorCrudController');
	CRUD::resource('descarga', 'DescargaCrudController');
	CRUD::resource('equipo', 'EquipoCrudController');
	CRUD::resource('evento', 'EventoCrudController');
	CRUD::resource('faq', 'FaqCrudController');
	CRUD::resource('foto', 'FotoCrudController');
	CRUD::resource('fotovoluntario', 'FotoVoluntarioCrudController');
	CRUD::resource('fuente', 'FuenteCrudController');
	CRUD::resource('indicador', 'IndicadorCrudController');
	CRUD::resource('institucion', 'InstitucionCrudController');
	CRUD::resource('patrocinador', 'PatrocinadorCrudController');
	CRUD::resource('proyecto', 'ProyectoCrudController');
	CRUD::resource('role', 'RoleCrudController');
	CRUD::resource('sistema', 'SistemaCrudController');
	CRUD::resource('social', 'SocialCrudController');
	CRUD::resource('unidadmedida', 'UnidadMedidaCrudController');
	CRUD::resource('user', 'UserCrudController');
	CRUD::resource('video', 'VideoCrudController');
	CRUD::resource('voluntario', 'VoluntarioCrudController');