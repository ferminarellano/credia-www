<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdUpdateRelacionCategoriosWithBlogAndProyect extends Migration
{
    public function up()
    {
		
		Schema::table('proyectos', function (Blueprint $table) {
			$table->dropForeign(['categoria_id']);
			$table->dropColumn('categoria_id');
        });
		
		
		//Relacion M:M tabla proyectos con categorias
		Schema::create('proyecto_categoria', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('proyecto_id')->unsigned()->nullable();
			$table->integer('categoria_id')->unsigned()->nullable();
			
			$table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
			$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
		});
    }

    public function down()
    {
		Schema::dropIfExists('proyecto_categoria');
		
		Schema::table('proyectos', function (Blueprint $table) {
			$table->integer('categoria_id')->unsigned()->nullable()->after('estado');
			$table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
}
