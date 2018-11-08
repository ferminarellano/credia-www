<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->dropColumn('contenido');
			$table->dropColumn('mensaje');
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->longText('contenido')->nullable();
			$table->text('mensaje')->nullable();
        });
    }
}
