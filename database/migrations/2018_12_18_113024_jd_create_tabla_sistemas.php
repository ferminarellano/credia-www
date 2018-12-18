<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateTablaSistemas extends Migration
{
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->string('texto_mini')->nullable();
            $table->string('nombre_sistema')->nullable();
            $table->longText('descripcion')->nullable();
            $table->string('url')->nullable();
            $table->longText('contenido')->nullable();
            $table->boolean('estado')->default(0);
			$table->longText('fotos')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
