@extends('adminlte::page')

@section('title', 'STUDIO')

@section('content')
<table>
<form>

  <tr>
    <td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Blocos de Exercícios</label>
    <select class="form-control" id="exampleFormControlSelect1">
      @foreach ($blocos as $bloco)
      <option value="{{$bloco-> id=2}}">{{$bloco->nome}}</option>
      @endforeach
    </select>
  </div>
</td>
  <td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Grupo muscular</label>
    <select class="form-control" id="exampleFormControlSelect1">
      @foreach ($gmusculares as $gmuscular)
      <option value="{{$gmuscular-> id}}">{{$gmuscular->nome}}</option>
      @endforeach
    </select>
  </div>
</td>
<td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Equipamento</label>
    <select class="form-control" id="exampleFormControlSelect1">
      @foreach ($equipamentos as $equipamento)
      <option value="{{$equipamento-> id}}">{{$equipamento->equipamento}}</option>
      @endforeach
    </select>
  </div>
   </td>
</table> 
    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Agendar</button>
    </div>
@stop