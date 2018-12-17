<?php

/*-------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------*/

Auth::routes();

Route::get('/home', 'IndexController@index')->name('index');
Route::get('/','IndexController@index')->name('index');
Route::get('conocenos', 'ConoceController@snosotros')->name('sobrenosotros');
Route::get('proyectos', 'ProyectoController@proyecto')->name('proyecto');
Route::get('eventos', 'EventoController@evento')->name('evento');
Route::get('blog', 'BlogController@blog')->name('blog');
Route::get('nuestras-actividades', 'ActividadController@actividad')->name('actividad');
Route::get('faq','FaqController@faq')->name('faq');
Route::get('equipo-de-trabajo', 'EquipoController@equipo')->name('equipo');
Route::get('voluntarios','VoluntarioController@voluntario')->name('voluntario');
Route::get('contacto', 'ContactoController@contacto')->name('contacto');
Route::get('sistemas', 'SistemaController@sistema')->name('sistema');

/* Faltantes - no estan mostrandose aun*/
Route::get('mision', 'MisionController@mision')->name('mision');
Route::get('galeria', 'GaleriaController@galeria')->name('galeria');

Route::get('blog/{slug}/{id}', 'BlogController@blogdetalle')->name('blogdetalle');
Route::get('eventos/{slug}/{id}', 'EventoController@eventodetalle')->name('eventodetalle');
Route::get('blog/categoria/{categoria}/{categoria_id}', 'BlogController@search_categoria_blog')->name('categoria_blog');
Route::get('proyectos/{slug}/{id}', 'ProyectoController@proyectodetalle')->name('proyectodetalle'); 
Route::get('proyectos/categoria/{categoria}/{categoria_id}', 'ProyectoController@search_categoria_proyecto')->name('categoria_proyecto');
Route::get('nuestras-actividades/{slug}/{id}', 'ActividadController@actividadetalle')->name('actividadetalle'); 


Route::post('/','IndexController@store');
Route::post('/voluntarios','VoluntarioController@store');
Route::post('/contactos','ContactoController@store');
Route::post('blog/{slug}/{id}','BlogController@store');