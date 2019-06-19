@extends('adminlte::page')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('user.update',$users->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Aluno*:</strong>
                    <input type="text" name="name" value="{{ $users->name }}" class="form-control">
                </div>
              
                <div class="form-group">
                    <strong>Data de nascimento*:</strong>
                    <input type="date" name="'data_nascimento'" value="{{ $users->data_nascimento }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Endereço*:</strong>
                    <input type="text" name="endereco" value="{{ $users->endereco }}" class="form-control">
                </div>
                 <div class="form-group">
                    <strong>Telefone*:</strong>
                    <input type="text" name="telefone" value="{{ $users->telefone }}" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Profissão*:</strong>
                    <input type="text" name="profissao" value="{{ $users->profissao }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Queixa*:</strong>
                    <input type="text" name="queixa" value="{{ $users->queixa }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Patologia*:</strong>
                    <input type="text" name="patologia" value="{{ $users->patologia }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Data de pagamento*:</strong>
                    <input type="date" name="data_pagamento" value="{{ $users->data_pagamento }}" class="form-control">
                </div>
            </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
   
    </form>
@endsection