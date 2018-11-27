<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateTableInstituciones extends Migration
{
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->timestamps();
        });
		
		Schema::table('users', function (Blueprint $table) {
            $table->integer('institucion_id')->nullable()->unsigned();
			
			$table->foreign('institucion_id')->references('id')->on('instituciones');
        });
    }

    public function down()
    {
		Schema::table('users', function (Blueprint $table) {
			$table->dropForeign(['institucion_id']);
			$table->dropColumn('institucion_id');
        });
		
        Schema::dropIfExists('instituciones');
    }
}
