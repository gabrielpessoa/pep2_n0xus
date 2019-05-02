<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGmuscularIdOnTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turmas', function (Blueprint $table) {
           	//Grupo muscular Foreign
			$table->integer('gmuscular_id')->unsigned();
			$table->foreign('gmuscular_id')->references('id')->on('gmusculars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turmas', function (Blueprint $table) {
            $table->dropForeign(['gmuscular_id']);
            $table->dropColumn(['gmuscular_id']);
        });
    }
}
