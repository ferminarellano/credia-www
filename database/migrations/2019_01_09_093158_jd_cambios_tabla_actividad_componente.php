<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaActividadComponente extends Migration
{
    public function up()
    {
        Schema::table('actividades', function (Blueprint $table) {
			$table->dropColumn('actividad');
        });
    }

    public function down()
    {
        Schema::table('actividades', function (Blueprint $table) {
			$table->string('actividad')->nullable()->after('id');
        });
    }
}
