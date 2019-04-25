<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSTUALUNOSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('STU_ALUNOS', function(Blueprint $table)
		{
			$table->string('ALU_CPF', 14)->primary();
			$table->string('ALU_NOME', 45)->nullable();
			$table->string('ALU_ENDERECO', 45)->nullable();
			$table->string('ALU_TELEFONE', 15)->nullable();
			$table->string('ALU_QUEIXA', 100)->nullable();
			$table->string('ALU_PATOLOGIA', 100)->nullable();
			$table->integer('ALU_GMU_ID')->nullable()->index('ALU_GMU_ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('STU_ALUNOS');
	}

}
