<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateSociales extends Migration
{
    public function up()
    {
        Schema::create('sociales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('red');
            $table->string('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sociales');
    }
}
