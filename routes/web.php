<?php

/*-------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------*/

Auth::routes();

Route::get('/home', 'IndexController@index')->name('index');

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/','IndexController@store_voluntario');

Route::get('/conocenos', ['as' => 'sobrenosotros', 'uses' => 'ConoceController@snosotros']);
Route::get('/proyectos', ['as' => 'proyecto', 'uses' => 'ProyectoController@proyecto']);
Route::get('/eventos', ['as' => 'evento', 'uses' => 'EventoController@evento']);
Route::get('/eventodetalles', ['as' => 'eventodetalle', 'uses' => 'EventoController@eventodetalle']);
Route::get('/blog', ['as' => 'blog', 'uses' => 'BlogController@blog']);
Route::get('/blogdetalles', ['as' => 'blogdetalle', 'uses' => 'BlogController@blogdetalle']);
Route::get('/donaciones', ['as' => 'donacion', 'uses' => 'DonacionController@donacion']);
Route::get('/preguntasfrecuentes', ['as' => 'faq', 'uses' => 'IndexController@faq']);
Route::get('/nuestra-mision', ['as' => 'mision', 'uses' => 'MisionController@mision']);
Route::get('/galeria', ['as' => 'galeria', 'uses' => 'GaleriaController@galeria']);
Route::get('/precios', ['as' => 'precio', 'uses' => 'DonacionController@precio']);
Route::get('/actividades', ['as' => 'servicio', 'uses' => 'IndexController@servicio']);
Route::get('/equipo', ['as' => 'equipo', 'uses' => 'EquipoController@equipo']);
Route::get('/voluntarios', ['as' => 'voluntario', 'uses' => 'VoluntarioController@voluntario']);
Route::get('/contacto', ['as' => 'contacto', 'uses' => 'ContactoController@contacto']);