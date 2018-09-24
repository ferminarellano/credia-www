<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaSlider extends Migration
{

    public function up()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->integer('secuencia')->after('contenido')->unique();
        });
    }

    public function down()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn('secuencia');
        });
    }
}
