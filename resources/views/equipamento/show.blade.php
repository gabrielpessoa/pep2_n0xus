@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Visualizar equipamento</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('equipamento.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipamento:</strong>
                {{ $equipamentos->equipamento }}
            </div>
        </div>
     
    </div>
@endsection