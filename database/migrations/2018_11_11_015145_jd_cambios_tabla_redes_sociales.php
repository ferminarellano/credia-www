<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaRedesSociales extends Migration
{
    public function up()
    {
        Schema::table('redes_sociales', function (Blueprint $table) {
            $table->renameColumn('nombre', 'red');
			$table->dropColumn('descripcion');
        });
    }

    public function down()
    {
        Schema::table('redes_sociales', function (Blueprint $table) {
            $table->renameColumn('red', 'nombre');
			$table->string('descripcion')->nullable();
        });
    }
}
