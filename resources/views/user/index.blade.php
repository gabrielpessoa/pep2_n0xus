@extends('adminlte::page')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" >
                <h2>Cadastro de Alunos </h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="col-lg-6"><div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Aluno</th>     
            <th>Data de Nascimento</th>
            <th>Endereço</th>      
            <th>Telefone</th>      
            <th>Profissão</th>      
            <th>Queixa</th>      
            <th>Patologia</th>       
            <th>Data de pagamento</th>       
        </tr>
        
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->data_nascimento }}</td>
            <td>{{ $user->endereco }}</td>
            <td>{{ $user->telefone }}</td>
            <td>{{ $user->profissao }}</td>
            <td>{{ $user->queixa }}</td>
            <td>{{ $user->patologia }}</td>
            <td>{{ $user->data_pagamento }}</td>

                     <td>
                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="">
        <a class="btn btn-primary" href="{{ route('user.create') }}"> Cadastre um novo aluno</a>
    </div>
</div> 
@endsection