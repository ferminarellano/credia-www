<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTableBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->longText('fotos')->nullable()->after('estado');
            $table->string('foto')->nullable()->change();
        });
		
		Schema::table('banners', function (Blueprint $table) {
            $table->string('foto')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn('fotos');
			$table->string('foto')->nullable(False)->change();
        });
		
		Schema::table('banners', function (Blueprint $table) {
            $table->string('foto')->nullable(False)->change();
        });
    }
}
