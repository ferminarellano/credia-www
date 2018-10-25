<?php

/*-------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------*/

Auth::routes();

Route::get('/home', 'IndexController@index')->name('index');

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/','IndexController@store_voluntario');

Route::get('/conocenos', ['as' => 'sobrenosotros', 'uses' => 'IndexController@snosotros']);
Route::get('/proyectos', ['as' => 'proyecto', 'uses' => 'IndexController@proyecto']);
Route::get('/eventos', ['as' => 'evento', 'uses' => 'IndexController@evento']);
Route::get('/eventodetalles', ['as' => 'eventodetalle', 'uses' => 'IndexController@eventodetalle']);
Route::get('/blog', ['as' => 'blog', 'uses' => 'IndexController@blog']);
Route::get('/blogdetalles', ['as' => 'blogdetalle', 'uses' => 'IndexController@blogdetalle']);
Route::get('/donaciones', ['as' => 'donacion', 'uses' => 'IndexController@donacion']);
Route::get('/preguntasfrecuentes', ['as' => 'faq', 'uses' => 'IndexController@faq']);
Route::get('/nuestramision', ['as' => 'mision', 'uses' => 'IndexController@mision']);
Route::get('/galeria', ['as' => 'galeria', 'uses' => 'IndexController@galeria']);
Route::get('/precios', ['as' => 'precio', 'uses' => 'IndexController@precio']);
Route::get('/servicio', ['as' => 'servicio', 'uses' => 'IndexController@servicio']);
Route::get('/equipo', ['as' => 'equipo', 'uses' => 'IndexController@equipo']);
Route::get('/voluntarios', ['as' => 'voluntario', 'uses' => 'VoluntarioController@voluntario']);
Route::get('/contacto', ['as' => 'contacto', 'uses' => 'IndexController@contacto']);