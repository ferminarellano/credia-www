<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTables extends Migration
{
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
			$table->string('tipo')->after('nombre')->nullable();
			$table->boolean('estado')->after('tipo')->default(FALSE);
        });
		
		Schema::table('actividades', function (Blueprint $table) {
			$table->dropColumn('fotos');
			$table->longText('galeria')->after('indicador')->nullable();
			$table->string('icono')->after('galeria')->nullable();
        });
		
		Schema::table('videos', function (Blueprint $table) {
			$table->string('cover')->after('url_video')->nullable();
        });
		
		Schema::create('componentes', function (Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('nombre');
			$table->timestamps();
        });
		
		Schema::table('actividades', function (Blueprint $table) {
			$table->integer('componente_id')->unsigned()->after('icono')->nullable();
			$table->foreign('componente_id')->references('id')->on('componentes')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
		
		//Relacion M:M tabla fotos con componentes
		Schema::create('foto_componente', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('foto_id')->unsigned()->nullable();
			$table->integer('componente_id')->unsigned()->nullable();
			
			$table->foreign('foto_id')->references('id')->on('fotos')->onDelete('cascade')->onUpdate('CASCADE');
			$table->foreign('componente_id')->references('id')->on('componentes')->onDelete('cascade')->onUpdate('CASCADE');
		});
		
		//Relacion M:M tabla videos con componentes
		Schema::create('video_componente', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('video_id')->unsigned()->nullable();
			$table->integer('componente_id')->unsigned()->nullable();
			
			$table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade')->onUpdate('CASCADE');
			$table->foreign('componente_id')->references('id')->on('componentes')->onDelete('cascade')->onUpdate('CASCADE');
		});
		
		//Relacion M:M tabla fotos con actividades
		Schema::create('foto_actividad', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('foto_id')->unsigned()->nullable();
			$table->integer('actividad_id')->unsigned()->nullable();
			
			$table->foreign('foto_id')->references('id')->on('fotos')->onDelete('cascade')->onUpdate('CASCADE');
			$table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade')->onUpdate('CASCADE');
		});
		
		//Relacion M:M tabla videos con actividades
		Schema::create('video_actividad', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('video_id')->unsigned()->nullable();
			$table->integer('actividad_id')->unsigned()->nullable();
			
			$table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade')->onUpdate('CASCADE');
			$table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade')->onUpdate('CASCADE');
		});
    }

    public function down()
    {	
		Schema::dropIfExists('video_actividad');
		
		Schema::dropIfExists('foto_actividad');
		
		Schema::dropIfExists('video_componente');
		
		Schema::dropIfExists('foto_componente');
		
		Schema::table('actividades', function (Blueprint $table) {
			$table->dropForeign(['componente_id']);
			$table->dropColumn('componente_id');
        });
	
		Schema::dropIfExists('componentes');
		
		Schema::table('videos', function (Blueprint $table) {
			$table->dropColumn('cover');
        });
		
		Schema::table('actividades', function (Blueprint $table) {
			$table->dropColumn('icono');
			$table->dropColumn('galeria');
			$table->longText('fotos')->after('indicador')->nullable();
        });
		
        Schema::table('albums', function (Blueprint $table) {
			$table->dropColumn('tipo');
			$table->dropColumn('estado');
        });
    }
}
