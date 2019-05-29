<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEquipamentosToSemanas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('semanas', function (Blueprint $table) {
            $table->integer('equipamento_id');
            $table->foreign('equipamento_id')->references('id')->on('equipamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('semanas', function (Blueprint $table) {
            $table->dropForeign(['equipamento_id']);
            $table->dropColumn(['equipamento_id']);
        });
    }
}
