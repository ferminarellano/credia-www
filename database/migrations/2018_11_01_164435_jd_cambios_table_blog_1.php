<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTableBlog1 extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->longText('contenido')->change();
			$table->longText('contenido_1')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->text('contenido')->change();
			$table->string('contenido_1')->nullable()->change();
        });
    }
}
