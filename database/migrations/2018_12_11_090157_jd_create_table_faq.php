<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCreateTableFaq extends Migration
{
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta')->nullable();
            $table->longText('respuesta')->nullable();
            $table->integer('categoria_id')->nullable()->unsigned();
            $table->timestamps();
			
			$table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    public function down()
    {
		Schema::table('faqs', function (Blueprint $table) {
			$table->dropForeign(['categoria_id']);
        });
		
        Schema::dropIfExists('faqs');
    }
}
