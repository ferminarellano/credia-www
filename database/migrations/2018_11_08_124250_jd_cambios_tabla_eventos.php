<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTablaEventos extends Migration
{
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
			$table->string('subtitulo')->nullable()->after('titulo');
			$table->string('foto')->nullable()->after('subtitulo');
			$table->dropColumn('descripcion');
			$table->dropColumn('contenido');
			$table->time('horaInicio')->nullable()->after('organizador');
			$table->time('horaFinal')->nullable()->after('horaInicio');
			$table->renameColumn('numero', 'telefono');
			$table->decimal('latitud',9,6)->nullable()->after('correo');
			$table->decimal('longitud',9,6)->nullable()->after('latitud');
			$table->longText('mision')->nullable()->after('longitud');
			$table->longText('vision')->nullable()->after('mision');
			$table->longText('objetivo')->nullable()->after('vision');
        });
		
		Schema::table('eventos', function (Blueprint $table) {
			$table->longText('contenido')->nullable()->after('fecha');
        });
    }

    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
			$table->dropColumn('subtitulo');
			$table->dropColumn('foto');
			$table->string('descripcion')->nullable()->after('fecha');
			$table->dropColumn('contenido');
			$table->dropColumn('horaInicio');
			$table->dropColumn('horaFinal');
			$table->renameColumn('telefono', 'numero');
			$table->dropColumn('latitud');
			$table->dropColumn('longitud');
			$table->dropColumn('mision');
			$table->dropColumn('vision');
			$table->dropColumn('objetivo');
        });
		
		Schema::table('eventos', function (Blueprint $table) {
			$table->text('contenido')->nullable()->after('descripcion');
        });
    }
}
