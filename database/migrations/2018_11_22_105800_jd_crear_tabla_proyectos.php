<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCrearTablaProyectos extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
			$table->string('titulo')->nullable();
			$table->string('subtitulo')->nullable();
			$table->string('foto')->nullable();
			$table->date('fecha_convenio')->nullable();
			$table->longText('contenido')->nullable();
			$table->float('presupuesto')->nullable();
			$table->float('utilizado')->nullable();
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_finalizacion')->nullable();
			$table->string('estado')->nullable();
			$table->integer('categoria_id')->unsigned()->nullable();	
			$table->integer('user_id')->unsigned()->nullable();	
            $table->timestamps();
			
			$table->foreign('categoria_id')->references('id')->on('categorias');
			$table->foreign('user_id')->references('id')->on('users');
        });
		
		//Relación M:M tabla proyectos con patrocinadores
		Schema::create('proyecto_patrocinador', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('proyecto_id')->unsigned()->nullable();
			$table->integer('patrocinador_id')->unsigned()->nullable();
			
			$table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
			$table->foreign('patrocinador_id')->references('id')->on('patrocinadores')->onDelete('cascade');
		});
    }

    public function down()
    {	
		Schema::dropIfExists('proyecto_patrocinador');
		
		Schema::table('proyectos', function (Blueprint $table) {
			$table->dropForeign(['categoria_id']);
			$table->dropForeign(['user_id']);
        });
		
        Schema::dropIfExists('proyectos');
    }
}
