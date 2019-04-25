<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSTUALUNOSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('STU_ALUNOS', function(Blueprint $table)
		{
			$table->foreign('ALU_GMU_ID', 'STU_ALUNOS_ibfk_1')->references('GMU_ID')->on('STU_GMUSCULAR')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('STU_ALUNOS', function(Blueprint $table)
		{
			$table->dropForeign('STU_ALUNOS_ibfk_1');
		});
	}

}
