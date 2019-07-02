<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semana_id')->unsigned();
            $table->integer('bloco_exercicio_id')->unsigned();
            $table->integer('gmuscular_id')->unsigned();
            $table->integer('equipamento_id')->unsigned();

            $table->foreign('semana_id')->references('id')->on('semanas');
            $table->foreign('bloco_exercicio_id')->references('id')->on('bloco_exercicios');
            $table->foreign('gmuscular_id')->references('id')->on('gmusculars');
            $table->foreign('equipamento_id')->references('id')->on('equipamentos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
