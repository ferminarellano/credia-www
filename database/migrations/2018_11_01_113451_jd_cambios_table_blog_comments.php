<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTableBlogComments extends Migration
{

    public function up()
    {
       Schema::table('blog_comments', function (Blueprint $table) {
			$table->dropForeign(['user_id']);
			$table->dropColumn('user_id');
			$table->integer('blog_post_id')->after('id')->unsigned();
			$table->string('correo')->after('titulo');
			$table->renameColumn('titulo', 'nombre');
			$table->dropColumn('fecha');
			$table->boolean('estado')->default(FALSE)->after('correo');
			$table->dropColumn('tipo');
			$table->dropColumn('aprobacion');
			$table->renameColumn('respuesta', 'comentario');
			$table->integer('comentario_padre')->unsigned()->change();
			$table->renameColumn('comentario_padre', 'parent');
        });
		
		Schema::table('blog_comments', function (Blueprint $table) {
			 $table->foreign('blog_post_id')->references('id')->on('blog_posts');
		});
    }
	
    public function down()
    {
        Schema::table('blog_comments', function (Blueprint $table) {
			$table->dropForeign(['blog_post_id']);
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
		});
		
		Schema::table('blog_comments', function (Blueprint $table) {
			$table->dropColumn('blog_post_id');
			$table->renameColumn('nombre', 'titulo');
			$table->date('fecha')->nullable();
			$table->dropColumn('correo');
			$table->dropColumn('estado');
			$table->string('tipo')->nullable();
			$table->boolean('aprobacion')->default(False)->nullable();
			$table->renameColumn('comentario', 'respuesta');
			$table->integer('parent')->unsigned(FALSE)->change();
			$table->renameColumn('parent','comentario_padre');
		});
    }
}
