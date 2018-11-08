<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTableBlog extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->string('foto')->after('id');
			$table->string('subtitulo')->after('titulo');
			$table->renameColumn('descripcion', 'mensaje');
			$table->string('contenido_1')->after('contenido');
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->dropColumn('foto');
			$table->dropColumn('subtitulo');
			$table->renameColumn('mensaje', 'descripcion');
			$table->dropColumn('contenido_1');
        });
    }
}
