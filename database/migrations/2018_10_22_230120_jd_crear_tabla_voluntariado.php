<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCrearTablaVoluntariado extends Migration
{
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('archivo')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
		
		Schema::create('redes_sociales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('url')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voluntarios');
        Schema::dropIfExists('redes_sociales');
    }
}
