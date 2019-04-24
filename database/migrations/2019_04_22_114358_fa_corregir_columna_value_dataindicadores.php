<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaCorregirColumnaValueDataindicadores extends Migration
{
    public function up()
    {
        Schema::table('data_indicadores',function(Blueprint $table){
			$table->decimal('valor',16,2)->change();
		});
    }

    public function down()
    {
        //
    }
}
