<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
	protected $table = 'agendamentos';
	protected $fillable = ['semana_id', 'bloco_exercicio_id', 'gmuscular_id', 'equipamento_id'];
	public function semanas(){
		return $table->hasMany('App\Semana');
	}
	public function blocos(){
		return $table->hasMany('App\BlocoExercicio');
	}
	public function gm(){
		return $table->hasMany('App\Gmuscular');
	}
	public function equipamentos(){
		return $table->hasMany('App\Equipamento');
	}
}
