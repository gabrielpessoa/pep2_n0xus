<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSTUTURMATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('STU_TURMA', function(Blueprint $table)
		{
			$table->integer('TUR_ID')->primary();
			$table->dateTime('TUR_HORARIO')->nullable();
			$table->string('TUR_ALU_CPF', 14)->nullable()->index('TUR_ALU_CPF');
			$table->integer('TUR_GMU_ID')->nullable()->index('TUR_GMU_ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('STU_TURMA');
	}

}
