<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaBanner extends Migration
{
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->boolean('estado')->default(0)->after('secuencia');
            $table->string('url')->nullable()->after('estado');
            $table->string('accion')->nullable()->after('url');
        });
    }

    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('estado');
            $table->dropColumn('url');
            $table->dropColumn('accion');
        });
    }
}
