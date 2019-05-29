@extends('adminlte::page')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar novo equipamento </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('equipamento.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro! </strong> Tem alguns problemas no seu campo. Preencha corretamente<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('equipamento.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipamento*:</strong>
                <input type="text" name="equipamento" class="form-control">
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</form>

@endsection