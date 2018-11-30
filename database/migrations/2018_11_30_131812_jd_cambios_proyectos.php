<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosProyectos extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
			$table->float('presupuesto')->default(0)->change();
			$table->float('utilizado')->default(0)->change();
            $table->float('avance')->nullable()->after('contenido')->default(0);
        });
    }

    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn('avance');
        });
    }
}
