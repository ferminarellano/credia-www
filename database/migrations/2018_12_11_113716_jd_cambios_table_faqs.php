<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTableFaqs extends Migration
{
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
			$table->dropColumn('categoria_id');
        });
    }

    public function down()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->integer('categoria_id')->nullable()->unsigned()->after('respuesta');
			$table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
}
