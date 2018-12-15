<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdAddColunsActividades extends Migration
{
    public function up()
    {
        Schema::table('actividades', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('estado');
            $table->string('titulo')->nullable()->after('foto');
			$table->longText('descripcion')->nullable()->after('titulo');
			$table->longText('contenido')->nullable()->after('descripcion');
        });
    }

    public function down()
    {
        Schema::table('actividades', function (Blueprint $table) {
			$table->dropColumn('foto');
			$table->dropColumn('titulo');
			$table->dropColumn('descripcion');
			$table->dropColumn('contenido');
        });
    }
}
