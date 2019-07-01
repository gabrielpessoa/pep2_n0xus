@extends('adminlte::page')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro de Turma</h2>
            </div>
        </div>
    </div>
   
     @if ($message = Session::get('success'))
        <div class="col-lg-6"><div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        </div>
    @endif 
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Horário</th>
            
        </tr>
         @foreach ($turmas as $turma)
        <tr>
          <td>{{ $turma->nome }}</td>
            <td>{{ $turma->horario }}</td>
            <td></td>
            <td></td>
            <td>
                <form action="{{ route('turma.destroy',$turma->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('turma.edit',$turma->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
     @endforeach
    </table>
    <div class="">
        <a class="btn btn-primary" href="{{ route('turma.create') }}"> Cadastre uma nova turma</a>
    </div>
</div>
@endsection