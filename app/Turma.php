<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['nome', 'horario'];

    public function alunos(){
    	return $this->hasMany('App\user');
    }
}
