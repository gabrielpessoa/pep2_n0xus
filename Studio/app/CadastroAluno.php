<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroAluno extends Model
{
    protected $fillable = ['ALU_NOME', 'ALU_ENDERECO', 'ALU_TELEFONE', 'ALU_CPF', 'ALU_QUEIXA', 'ALU_PATOLOGIA'];
    protected $table = 'STU_ALUNOS';
}
