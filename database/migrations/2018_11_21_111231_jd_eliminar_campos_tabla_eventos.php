<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdEliminarCamposTablaEventos extends Migration
{
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->dropColumn('mision');
            $table->dropColumn('vision');
            $table->dropColumn('objetivo');
        });
    }

    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->longText('mision')->nullable()->after('longitud');
			$table->longText('vision')->nullable()->after('mision');
			$table->longText('objetivo')->nullable()->after('vision');
        });
    }
}
