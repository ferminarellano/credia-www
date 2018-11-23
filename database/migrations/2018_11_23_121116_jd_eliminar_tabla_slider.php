<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdEliminarTablaSlider extends Migration
{
    public function up()
    {	
		Schema::dropIfExists('sliders');
		
        Schema::table('banners', function (Blueprint $table) {
            $table->integer('secuencia')->after('descripcion')->unique()->nullable();
        });
		
		Schema::table('contacto_eventos', function (Blueprint $table) {
            $table->dropForeign(['evento_id']);
        });
		
		Schema::dropIfExists('contacto_eventos');
    }

    public function down()
    {	
		Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
			$table->string('foto')->nullable();
			$table->string('indicador')->nullable();
			$table->string('titulo')->nullable();
			$table->text('contenido')->nullable();
			$table->integer('secuencia')->unique()->nullable();
            $table->timestamps();
        });
		
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('secuencia');
        });
		
		Schema::create('contacto_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id')->nullable()->unsigned();
			$table->string('nombre')->nullable();
            $table->string('correo')->nullable();
            $table->string('mensaje')->nullable();
            $table->timestamps();
			
			$table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
        });
		
    }
}
