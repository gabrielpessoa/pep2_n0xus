@extends('adminlte::page')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar novo aluno </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('user.index') }}"> Voltar</a>
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
   
<form action="{{ route('user.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aluno*:</strong>
                <input type="text" name="name" class="form-control">
            </div>
       
                   <div class="form-group">
                <strong>Data de nascimento*:</strong>
                <input type="date" name="data_nascimento" class="form-control">
            </div>
            <div class="form-group">
                <strong>Endereço*:</strong>
                <input type="text" name="endereco" class="form-control">
            </div>
             <div class="form-group">
                <strong>Telefone*:</strong>
                <input type="text" name="telefone" class="form-control">
            </div>
            <div class="form-group">
                <strong>Profissão*:</strong>
                <input type="text" name="profissao" class="form-control">
            </div>
            <div class="form-group">
                <strong>Queixa*:</strong>
                <input type="text" name="queixa" class="form-control">
            </div>
            <div class="form-group">
                <strong>Patologia*:</strong>
                <input type="text" name="patologia" class="form-control">
            </div>
            <div class="form-group">
                <strong>Data de pagamento*:</strong>
                <input type="date" name="data_pagamento" class="form-control">
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</form>

@endsection