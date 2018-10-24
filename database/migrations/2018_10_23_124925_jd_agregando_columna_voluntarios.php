<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdAgregandoColumnaVoluntarios extends Migration
{
    public function up()
    {
        Schema::table('voluntarios', function (Blueprint $table) {
			$table->string('correo')->after('nombre')->nullable();
        });
    }

    public function down()
    {
        Schema::table('voluntarios', function (Blueprint $table) {
			 $table->dropColumn('correo');
        });
    }
}
