<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
	protected $table = 'semanas';
	protected $fillable = ['n_semana','semana_id'];
	//
	public function agendamento(){
		return $table->belongsTo('App\Agendamento');
	}
}
