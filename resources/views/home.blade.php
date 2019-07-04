@extends('adminlte::page')

@section('title', 'STUDIO')

@section('content')
<head>
  <link rel="stylesheet" href="{{asset('css/datedropper.css')}}">
  <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
  <script src="{{asset('js/datedropper.js')}}"></script>
</head>
<div class="container">
  <form method="post" class="form-group" action="{{route('home.store')}}">
    @csrf
    @php($a=1)
    @for($i=0; $i<4; $i++)
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="exampleFormControlSelect1">Blocos de Exercícios</label>
          <input type="text" class="form-control" value= "{{$blocos[$i]->nome}}" disabled>
          <input type="hidden" name="bloco{{$a}}" value= "{{$a}}" >
        </div>
        <div class="form-group col-md-4">
          <label for="exampleFormControlSelect1">Grupo muscular</label>
          <select class="form-control" id="exampleFormControlSelect1" name="gmuscular{{$a}}">
            @foreach ($gmusculares as $gmuscular)
              <option value="{{$gmuscular-> id}}">{{$gmuscular->nome}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="exampleFormControlSelect1">Equipamento</label>
          <select class="form-control" id="exampleFormControlSelect1" name="equipamento{{$a}}">
            @foreach ($equipamentos as $equipamento)
              <option value="{{$equipamento-> id}}">{{$equipamento->equipamento}}</option>
            @endforeach
          </select>
        </div>
      </div>
      @php($a++)
    @endfor
    <div class="form-row">
      <label for="exampleFormControlSelect1" style="margin-left: 15px;">Data de Agendamento</label>
      <div class="form-group" name="data">
        <input type="text" id="input" class="" style="margin-left: 15px;" name="data">
        <script>
          $('#input').dateDropper();
        </script>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group">
        <div class="col-md-2 text-left">
            <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
      </div>
    </div>
  </form>
</div>
@stop