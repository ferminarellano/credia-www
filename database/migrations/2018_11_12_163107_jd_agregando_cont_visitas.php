<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdAgregandoContVisitas extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
             $table->integer('total_vista')->default(0)->nullable()->after('estado');
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn('total_vista');
        });
    }
}
