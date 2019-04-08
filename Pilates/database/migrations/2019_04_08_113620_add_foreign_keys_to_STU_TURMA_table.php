<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSTUTURMATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('STU_TURMA', function(Blueprint $table)
		{
			$table->foreign('TUR_ALU_ID', 'STU_TURMA_ibfk_1')->references('ALU_ID')->on('STU_ALUNOS')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('STU_TURMA', function(Blueprint $table)
		{
			$table->dropForeign('STU_TURMA_ibfk_1');
		});
	}

}
