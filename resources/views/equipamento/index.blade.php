@extends('adminlte::page')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" >
                <h2>Cadastro de Equipamentos </h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Equipamento</th>
                      
        </tr>
        @foreach ($equipamentos as $equipamento)
        <tr>
            <td>{{ $equipamento->equipamento }}</td>
                     <td>
                <form action="{{ route('equipamento.destroy',$equipamento->id) }}" method="POST">
   
                    <a class="btn btn-success" href="{{ route('equipamento.show',$equipamento->id) }}">Visualizar</a>
    
                    <a class="btn btn-primary" href="{{ route('equipamento.edit',$equipamento->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="">
        <a class="btn btn-primary" href="{{ route('equipamento.create') }}"> Cadastre um novo equipamento</a>
    </div>
</div> 
@endsection