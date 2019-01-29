<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaActividades extends Migration
{
    public function up()
    {
        Schema::table('voluntarios', function (Blueprint $table) {
            $table->dropForeign(['actividad_id']);
			$table->dropColumn('actividad_id');
        });
		
		Schema::create('actividad_voluntarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('actividad')->nullable();
            $table->timestamps();
        });
		
		Schema::table('voluntarios', function (Blueprint $table) {
			$table->integer('actividad_voluntario_id')->unsigned()->nullable()->after('id');
            $table->foreign('actividad_voluntario_id')->references('id')->on('actividad_voluntarios');
        });
    }

    public function down()
    {
		Schema::table('voluntarios', function (Blueprint $table) {
            $table->dropForeign(['actividad_voluntario_id']);
			$table->dropColumn('actividad_voluntario_id');
        });
		
        Schema::table('voluntarios', function (Blueprint $table) {
			$table->integer('actividad_id')->unsigned()->nullable()->after('id');
			$table->foreign('actividad_id')->references('id')->on('actividades');
        });
		
		Schema::dropIfExists('actividad_voluntarios');
    }
}
