<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaCrearZonasTabla extends Migration
{
    public function up()
    {
		Schema::create('zonas_geograficas',function(Blueprint $table){
			$table->increments('id');
			$table->string('nombre');
			$table->integer('nivel');

			$table->integer('padre_id')->unsigned()->nullable();
			$table->foreign('padre_id')->references('id')->on('zonas_geograficas');
			$table->boolean('activo')->default(True);
		});
    }
	
    public function down()
    {
		Schema::table('zonas_geograficas', function (Blueprint $table) {
			$table->dropForeign(['padre_id']);
        });
		
        Schema::dropIfExists('zonas_geograficas');
    }
}
