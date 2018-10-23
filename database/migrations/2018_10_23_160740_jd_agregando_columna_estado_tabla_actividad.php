<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdAgregandoColumnaEstadoTablaActividad extends Migration
{

    public function up()
    {
        Schema::table('actividades', function (Blueprint $table) {
			 $table->boolean('estado')->after('actividad')->default(TRUE);
        });
    }

    public function down()
    {
        Schema::table('actividades', function (Blueprint $table) {
			$table->dropColumn('estado');
        });
    }
}
