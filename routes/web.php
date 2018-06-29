<?php

/*-------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------*/

Route::get('/', ['as' => 'index', 'uses' => 'PaginaController@inicio']);
Route::get('/conocenos', ['as' => 'sobrenosotros', 'uses' => 'PaginaController@snosotros']);
Route::get('/proyectos', ['as' => 'proyecto', 'uses' => 'PaginaController@proyecto']);
Route::get('/eventos', ['as' => 'evento', 'uses' => 'PaginaController@evento']);
Route::get('/eventodetalles', ['as' => 'eventodetalle', 'uses' => 'PaginaController@eventodetalle']);
Route::get('/blog', ['as' => 'blog', 'uses' => 'PaginaController@blog']);
Route::get('/blogdetalles', ['as' => 'blogdetalle', 'uses' => 'PaginaController@blogdetalle']);
Route::get('/donaciones', ['as' => 'donacion', 'uses' => 'PaginaController@donacion']);
Route::get('/preguntasfrecuentes', ['as' => 'faq', 'uses' => 'PaginaController@faq']);
Route::get('/nuestramision', ['as' => 'mision', 'uses' => 'PaginaController@mision']);
Route::get('/galeria', ['as' => 'galeria', 'uses' => 'PaginaController@galeria']);
Route::get('/precios', ['as' => 'precio', 'uses' => 'PaginaController@precio']);
Route::get('/servicio', ['as' => 'servicio', 'uses' => 'PaginaController@servicio']);
Route::get('/equipo', ['as' => 'equipo', 'uses' => 'PaginaController@equipo']);
Route::get('/voluntarios', ['as' => 'voluntario', 'uses' => 'PaginaController@voluntario']);
Route::get('/contacto', ['as' => 'contacto', 'uses' => 'PaginaController@contacto']);
