<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateGaleriaTables extends Migration
{
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string('nombre');
			$table->longText('descripcion')->nullable();
			$table->date('fecha')->nullable();
			$table->string('cover')->nullable();
			$table->timestamps();
        });
		
		Schema::create('fotos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string('nombre');
			$table->integer('album_id')->unsigned()->nullable();
			$table->longText('fotos')->nullable();
			$table->longText('descripcion')->nullable();
			$table->integer('secuencia')->nullable();
			$table->foreign('album_id')->references('id')->on('albums')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->timestamps();
        });
		
		Schema::create('videos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string('nombre');
			$table->integer('album_id')->unsigned()->nullable();
			$table->longText('url_video')->nullable();
			$table->longText('descripcion')->nullable();
			$table->integer('secuencia')->nullable();
			$table->foreign('album_id')->references('id')->on('albums')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->timestamps();
        });
    }

    public function down()
    {	
		Schema::drop('fotos');
		Schema::drop('videos');
        Schema::dropIfExists('albums');
    }
}
