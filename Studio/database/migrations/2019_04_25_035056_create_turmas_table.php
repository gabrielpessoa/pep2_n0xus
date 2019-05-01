<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turmas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('horario');

			$table->integer('gmuscular_id')->unsigned();
			$table->foreign('gmuscular_id')->references('id')->on('gmuscular');
                        $table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users');
                });
 			
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('turmas');
	}

}
