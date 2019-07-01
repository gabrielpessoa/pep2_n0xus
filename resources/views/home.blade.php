@extends('adminlte::page')

@section('title', 'STUDIO')

@section('content')
  <div class="container">
<form method="post" action="{{route(home.store)}}">
@for($i=0; $i<4; $i++)
  
    <div class="row">
      <div class="col-6">
        <label for="exampleFormControlSelect1">Blocos de Exercícios</label> 
        <input type="text" name="bloco" disabled="" value= "{{$blocos[$i]->nome}}">
      </div>
      <div class="col-6">
        <label for="exampleFormControlSelect1">Grupo muscular</label>
        <select class="form-control" id="exampleFormControlSelect1">
          @foreach ($gmusculares as $gmuscular)
          <option value="{{$gmuscular-> id}}">{{$gmuscular->nome}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-6">
        <label for="exampleFormControlSelect1">Equipamento</label>
        <select class="form-control" id="exampleFormControlSelect1">
          @foreach ($equipamentos as $equipamento)
          <option value="{{$equipamento-> id}}">{{$equipamento->equipamento}}</option>
          @endforeach
        </select>
      </div>
    </div>
  @endfor
    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
      <button type="submit" class="btn btn-primary">Agendar</button>
    </div>
  </div>
@stop