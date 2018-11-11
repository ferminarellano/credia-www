<?php

/*-------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------*/

Auth::routes();



Route::get('/home', 'IndexController@index')->name('index');
Route::get('/','IndexController@index')->name('index');
Route::get('/conocenos', 'ConoceController@snosotros')->name('sobrenosotros');
Route::get('/proyectos', 'ProyectoController@proyecto')->name('proyecto');
Route::get('/eventos', 'EventoController@evento')->name('evento');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/patrocinar', 'PatrocinadorController@donacion')->name('donacion');
Route::get('/preguntasfrecuentes','IndexController@faq')->name('faq');
Route::get('/nuestra-mision', 'MisionController@mision')->name('mision');
Route::get('/galeria', 'GaleriaController@galeria')->name('galeria');
Route::get('/precios', 'DonacionController@precio')->name('precio');
Route::get('/actividades', 'IndexController@servicio')->name('servicio');
Route::get('/equipo', 'EquipoController@equipo')->name('equipo');
Route::get('/voluntarios','VoluntarioController@voluntario')->name('voluntario');
Route::get('/contactos', 'ContactoController@contacto')->name('contacto');

Route::get('blog/{id}', 'BlogController@blogdetalle')->name('blogdetalle');
Route::get('evento/{id}', 'EventoController@eventodetalle')->name('eventodetalle');

Route::post('/','IndexController@store');
Route::post('/voluntarios','VoluntarioController@store');
Route::post('/contactos','ContactoController@store');