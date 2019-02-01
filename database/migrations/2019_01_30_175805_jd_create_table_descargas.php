<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateTableDescargas extends Migration
{
    public function up()
    {
        Schema::create('descargas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->longText('archivos')->nullable();
            $table->longText('descripcion')->nullable();
			$table->boolean('estado')->default(FALSE);
            $table->integer('secuencia')->nullable();
            $table->timestamps();
        });
		
		//Relacion M:M tabla descargas con componentes
		Schema::create('descarga_componente', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('descarga_id')->unsigned()->nullable();
			$table->integer('componente_id')->unsigned()->nullable();
			
			$table->foreign('descarga_id')->references('id')->on('descargas')->onDelete('cascade')->onUpdate('CASCADE');
			$table->foreign('componente_id')->references('id')->on('componentes')->onDelete('cascade')->onUpdate('CASCADE');
		});
		
		//Relacion M:M tabla descargas con actividades
		Schema::create('descarga_actividad', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('descarga_id')->unsigned()->nullable();
			$table->integer('actividad_id')->unsigned()->nullable();
			
			$table->foreign('descarga_id')->references('id')->on('descargas')->onDelete('cascade')->onUpdate('CASCADE');
			$table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade')->onUpdate('CASCADE');
		});
    }

    public function down()
    {
		Schema::dropIfExists('descarga_componente');
		
		Schema::dropIfExists('descarga_actividad');
		
        Schema::dropIfExists('descargas');
    }
}
