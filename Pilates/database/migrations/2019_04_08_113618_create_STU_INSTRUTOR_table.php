<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSTUINSTRUTORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('STU_INSTRUTOR', function(Blueprint $table)
		{
			$table->integer('INS_ID')->primary();
			$table->string('INS_NOME', 45)->nullable();
			$table->string('INS_SENHA', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('STU_INSTRUTOR');
	}

}
