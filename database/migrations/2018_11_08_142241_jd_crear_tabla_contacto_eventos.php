<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCrearTablaContactoEventos extends Migration
{
    public function up()
    {
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

    public function down()
    {
		 Schema::table('contacto_eventos', function (Blueprint $table) {
			$table->dropForeign(['evento_id']);
        });
		
        Schema::dropIfExists('contacto_eventos');
    }
}
