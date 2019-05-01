<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGmuscularTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gmuscular', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 50)->nullable();
			$table->string('exercicio', 150);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{		Schema::drop('gmuscular');
	}

}
