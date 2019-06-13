@extends('adminlte::page')

@section('title', 'STUDIO')

@section('content')
<form>
<div class="form-group">
    <label for="exampleFormControlSelect1">Dia da Semana</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Segunda</option>
      <option>Terça-Feira</option>
      <option>Quarta-Feira</option>
      <option>Quinta-Feira</option>
      <option>Sexta-Feira</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selecionar Turma</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Turma 1</option>
      <option>Turma 2</option>
      <option>Turma 3</option>
      <option>Turma 4</option>
      <option>Turma 5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Horário</label>
    <input type="time" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Grupo muscular</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Grupo muscular 1</option>
      <option>Grupo muscular 2</option>
      <option>Grupo muscular 3</option>
      <option>Grupo muscular 4</option>
      <option>Grupo muscular 5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Equipamento</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Equipamento 1</option>
      <option>Equipamento 2</option>
      <option>Equipamento 3</option>
      <option>Equipamento 4</option>
      <option>Equipamento 5</option>
    </select>
  </div>
  <div class="form-group">
    <button>Agendar</button>
  </div>
  
</form>
    
@stop