<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdAddColumnsBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->string('nombre')->nullable()->after('total_vista');
			$table->string('correo')->nullable()->after('nombre');
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
			$table->dropColumn('nombre');
			$table->dropColumn('correo');
        });
    }
}
