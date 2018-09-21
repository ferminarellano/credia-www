<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSliders extends Migration
{

    public function up()
    {
		Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
			$table->string('foto')->nullable();
			$table->string('indicador')->nullable();
			$table->string('titulo')->nullable();
			$table->text('contenido')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
		Schema::dropIfExists('sliders');
    }
}
