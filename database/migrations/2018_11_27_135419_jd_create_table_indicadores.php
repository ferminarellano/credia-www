<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateTableIndicadores extends Migration
{
    public function up()
    {
		Schema::create('unidades_de_medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->timestamps();
        });
		
        Schema::create('indicadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->longText('descripcion')->nullable();
			$table->string('frecuencia')->nullable();
			$table->string('frecuencia_posteo')->nullable();
			$table->string('protocolo_recoleccion')->nullable();
			$table->string('calculo_indicador')->nullable();
			$table->boolean('estado')->default(False)->nullable();
			$table->string('tipo_indicador')->nullable();
			$table->string('evaluacion_tipo')->nullable();
            $table->float('valor')->nullable();
			$table->integer('unidad_medida_id')->nullable()->unsigned();
			$table->integer('institucion_id')->nullable()->unsigned();
            $table->timestamps();
			
			$table->foreign('unidad_medida_id')->references('id')->on('unidades_de_medidas');
			$table->foreign('institucion_id')->references('id')->on('instituciones');
        });
		
		//Relacion M:M tabla indicadores con users
		Schema::create('indicador_user', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('indicador_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			
			$table->foreign('indicador_id')->references('id')->on('indicadores')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
    }

    public function down()
    {
		Schema::dropIfExists('indicador_user');
		
		Schema::table('indicadores', function (Blueprint $table) {
			$table->dropForeign(['unidad_medida_id']);
			$table->dropForeign(['institucion_id']);
        });

        Schema::dropIfExists('indicadores');
		
        Schema::dropIfExists('unidades_de_medidas');
    }
}
