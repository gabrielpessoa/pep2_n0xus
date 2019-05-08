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
   
    <!-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif -->
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Horário</th>
            <th width="280px">Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="">Visualizar</a>
    
                    <a class="btn btn-primary" href="">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
    </table>
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('turma.create')}}"> Cadastre um nova turma</a>
    </div>
</div>
@endsection