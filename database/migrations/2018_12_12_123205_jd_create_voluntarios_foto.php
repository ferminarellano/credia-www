<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateVoluntariosFoto extends Migration
{
    public function up()
    {
        Schema::create('foto_voluntarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('foto')->nullable();
            $table->string('nombre')->nullable();
            $table->string('cargo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_voluntarios');
    }
}
