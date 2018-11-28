<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCrearTablaIngresodataIndicador extends Migration
{
    public function up()
    {
		Schema::table('indicadores', function (Blueprint $table) {
			$table->dropColumn('estado');
        });
		
		Schema::create('fuentes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('fuente')->nullable();
			$table->integer('institucion_id')->nullable()->unsigned();
			$table->timestamps();
			
			$table->foreign('institucion_id')->references('id')->on('instituciones');
        });
		
        Schema::create('data_indicadores', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('indicador_id')->unsigned()->nullable();
			$table->dateTime('fecha_inicio')->nullable();
			$table->dateTime('fecha_final')->nullable();
			$table->float('valor')->nullable();
			$table->boolean('estado')->default(False)->nullable();
			$table->date('fecha_aprovacion')->nullable();
			$table->integer('created_user_id')->unsigned()->nullable();
			$table->integer('updated_user_id')->unsigned()->nullable();
			$table->integer('institucion_id')->nullable()->unsigned();
			$table->integer('fuente_id')->nullable()->unsigned();
            $table->timestamps();
			
			$table->foreign('indicador_id')->references('id')->on('indicadores');
			$table->foreign('created_user_id')->references('id')->on('users');
			$table->foreign('updated_user_id')->references('id')->on('users');
			$table->foreign('institucion_id')->references('id')->on('instituciones');
			$table->foreign('fuente_id')->references('id')->on('fuentes');
        });
    }

    public function down()
    {
		Schema::table('indicadores', function (Blueprint $table) {
			$table->boolean('estado')->default(False)->nullable()->after('calculo_indicador');
        });
		
		Schema::table('data_indicadores', function (Blueprint $table) {
			$table->dropForeign(['indicador_id']);
			$table->dropForeign(['created_user_id']);
			$table->dropForeign(['updated_user_id']);
			$table->dropForeign(['institucion_id']);
			$table->dropForeign(['fuente_id']);
        });
		
        Schema::dropIfExists('data_indicadores');
		
		Schema::table('fuentes', function (Blueprint $table) {
			$table->dropForeign(['institucion_id']);
        });
		
		Schema::dropIfExists('fuentes');
    }
}
