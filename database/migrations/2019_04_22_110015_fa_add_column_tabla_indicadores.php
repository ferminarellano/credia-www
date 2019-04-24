<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaAddColumnTablaIndicadores extends Migration
{
    public function up()
    {
        Schema::table('data_indicadores',function(Blueprint $table){

			$table->integer('zona_id')->unsigned()->nullable();
			$table->foreign('zona_id')->references('id')->on('zonas_geograficas');
			
			$table->integer('uom_id')->unsigned()->nullable();
			$table->foreign('uom_id')->references('id')->on('unidades_de_medidas');
		});
    }

    public function down()
    {
        Schema::table('data_indicadores', function (Blueprint $table) {
			$table->dropForeign(['zona_id']);
			$table->dropForeign(['uom_id']);
        });
		
		Schema::table('data_indicadores', function (Blueprint $table) {
			$table->dropColumn(['zona_id', 'uom_id']);
		});
    }
}
