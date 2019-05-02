<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
	        $table->enum('tipo', ['aluno', 'gerente', 'instrutor'])->default('aluno');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
	        $table->string('endereco')->nullable();
	        $table->string('telefone')->nullable();
	        $table->string('queixa')->nullable();
	        $table->string('patologia')->nullable();
	        $table->string('cpf')->nullable();
            //Especificos do laravel
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
