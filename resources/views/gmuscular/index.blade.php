@extends('adminlte::page')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" >
                <h2>Cadastro do grupo muscular</h2>
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
            <th>Nome</th>
                      
        </tr>
        @foreach ($gmusculares as $gmuscular)
        <tr>
            <td>{{ $gmuscular->nome }}</td>
                     <td>
                <form action="{{ route('gmuscular.destroy',$gmuscular->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('gmuscular.edit',$gmuscular->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="">
        <a class="btn btn-primary" href="{{ route('gmuscular.create') }}"> Cadastre um novo grupo muscular</a>
    </div>
</div> 
@endsection