@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Visualizar grupo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('gmuscular.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $gmusculares->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Exercício:</strong>
                {{ $gmusculares->maquina }}
            </div>
        </div>
    </div>
@endsection