<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdEliminarTablaDuplicada extends Migration
{
    public function up()
    {
		Schema::dropIfExists('sociales');
    }

    public function down()
    {
        Schema::create('sociales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('red');
            $table->string('link');
            $table->timestamps();
        });
    }
}
