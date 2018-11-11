<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosRelacioEventos extends Migration
{
    public function up()
    {
        Schema::table('evento_patrocinador', function (Blueprint $table) {
			$table->dropForeign(['evento_id']);
			$table->dropForeign(['patrocinador_id']);
			
			$table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
			$table->foreign('patrocinador_id')->references('id')->on('patrocinadores')->onDelete('cascade');
        });
		
    }

    public function down()
    {
        Schema::table('evento_patrocinador', function (Blueprint $table) {
            $table->dropForeign(['evento_id']);
			$table->dropForeign(['patrocinador_id']);
			
			$table->foreign('evento_id')->references('id')->on('eventos');
			$table->foreign('patrocinador_id')->references('id')->on('patrocinadores');
        });
    }
}
