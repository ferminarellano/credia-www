<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCrearTablaActividad extends Migration
{
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad')->nullable();
            $table->timestamps();
        });
		
		Schema::table('voluntarios', function (Blueprint $table) {
            $table->unsignedInteger('actividad_id')->after('id')->nullable();
			$table->foreign('actividad_id')->references('id')->on('actividades');
        });
    }

    public function down()
    {	
		Schema::table('voluntarios', function (Blueprint $table) {
            $table->dropForeign(['actividad_id']);
			 $table->dropColumn('actividad_id');
        });
		
        Schema::dropIfExists('actividades');
    }
}
