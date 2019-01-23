<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaProyectos extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
			$table->dropColumn('estado');
        });
		
		Schema::table('proyectos', function (Blueprint $table) {
			$table->boolean('estado')->after('fecha_finalizacion')->default(FALSE);
        });
    }

    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
			$table->dropColumn('estado');
        }); 

		Schema::table('proyectos', function (Blueprint $table) {
			$table->string('estado')->after('fecha_finalizacion')->nullable();
        });
    }
}
