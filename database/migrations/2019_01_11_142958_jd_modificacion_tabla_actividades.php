<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdModificacionTablaActividades extends Migration
{
    public function up()
    {
        Schema::table('actividades', function (Blueprint $table) {
			$table->string('indicador')->after('contenido')->nullable();
			$table->string('fotos')->after('indicador')->nullable();
        });
    }

    public function down()
    {
        Schema::table('actividades', function (Blueprint $table) {
			$table->dropColumn('indicador');
			$table->dropColumn('fotos');
        });
    }
}
