<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdModificacionTablaProyectos extends Migration
{

    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
			$table->longText('descripcion')->after('titulo')->nullable();
        });
    }

    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn('descripcion');
        });
    }
}
