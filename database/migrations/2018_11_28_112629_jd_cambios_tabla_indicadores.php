<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaIndicadores extends Migration
{
    public function up()
    {
        Schema::table('indicadores', function (Blueprint $table) {
             $table->longText('protocolo_recoleccion')->nullable()->change();
             $table->longText('calculo_indicador')->nullable()->change();
			 $table->dropColumn('valor');
        });
    }

    public function down()
    {
        Schema::table('indicadores', function (Blueprint $table) {
            $table->string('protocolo_recoleccion')->nullable()->change();
            $table->string('calculo_indicador')->nullable()->change();
			$table->float('valor')->nullable()->after('evaluacion_tipo');
        });
    }
}
