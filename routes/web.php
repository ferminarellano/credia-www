<?php

/*-------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------*/

Auth::routes();

Route::get('/home', 'IndexController@index')->name('index');
Route::get('/','IndexController@index')->name('index');
Route::get('alquiler-de-salones', 'ServicioController@alquiler_salones')->name('alquiler_s');
Route::get('alquiler-de-oficinas', 'ServicioController@alquiler_oficinas')->name('alquiler_o');
Route::get('blog', 'BlogController@blog')->name('blog');
Route::get('cendoc', 'ComponenteController@cendoc')->name('cendoc');
Route::get('contactenos', 'ContactoController@contacto')->name('contacto');
Route::get('convenios', 'FundacionController@convenio')->name('convenio');
Route::get('educacion-ambiental', 'ComponenteController@educacion_ambiental')->name('edu_ambiental');
Route::get('equipo-de-trabajo', 'FundacionController@equipo_trabajo')->name('equipo_trabajo');
Route::get('estructura-organizativa', 'FundacionController@estructura_organizativa')->name('estructura_organizativa');
Route::get('eventos', 'EventoController@evento')->name('evento');
Route::get('preguntas-frecuentes','FaqController@faq')->name('faq');
Route::get('informes-anuales', 'FundacionController@informes')->name('informe');
Route::get('multimedias', 'MultimediaController@multimedia')->name('multimedia');
Route::get('nuestras-actividades', 'ActividadController@actividad')->name('actividad');
Route::get('observatorio', 'ComponenteController@observatorio')->name('observatorio');
Route::get('proyectos', 'ProyectoController@proyecto')->name('proyecto');
Route::get('quienes-somos', 'FundacionController@quien_somos')->name('quienes_somos');
Route::get('sistemas', 'SistemaController@sistema')->name('sistema');
Route::get('voluntarios','VoluntarioController@voluntario')->name('voluntario');

Route::get('blog/categoria/{categoria}/{categoria_id}', 'BlogController@search_categoria_blog')->name('categoria_blog');
Route::get('blog/{slug}/{id}', 'BlogController@blogdetalle')->name('blogdetalle');
Route::get('eventos/{slug}/{id}', 'EventoController@eventodetalle')->name('eventodetalle');
Route::get('proyectos/categoria/{categoria}/{categoria_id}', 'ProyectoController@search_categoria_proyecto')->name('categoria_proyecto');
Route::get('proyectos/{slug}/{id}', 'ProyectoController@proyectodetalle')->name('proyectodetalle'); 
Route::get('multimedia/albumes/{slug}', 'MultimediaController@album')->name('album');
Route::get('multimedia/albumes/fotos/{id}', 'MultimediaController@foto')->name('foto');
Route::get('multimedia/albumes/videos/{id}', 'MultimediaController@video')->name('video');
Route::get('nuestras-actividades/{slug}/{id}', 'ActividadController@actividadetalle')->name('actividadetalle'); 
Route::get('sistemas/{slug}/{id}', 'SistemaController@sistemadetalle')->name('sistemadetalle');

Route::post('/','IndexController@store');
Route::post('blog/{slug}/{id}','BlogController@store');
Route::post('/contactos','ContactoController@store');
Route::post('/voluntarios','VoluntarioController@store');