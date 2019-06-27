@extends('adminlte::page')

@section('title', 'STUDIO')

@section('content')
<table>
<form>

  <tr>
    <td>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Bloco de Exercício</label> <br>
      <input type="name" name="bloco" placeholder="Bloco 1">
    
  </div>
</td>
  <td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Grupo muscular</label>
    <select class="form-control" id="exampleFormControlSelect1">
      @foreach ($gmusculares as $gmuscular)
      <option value="{{$gmuscular-> id}}">{{$gmuscular->nome}}</option>
      @endforeach
    </select>
  </div>
</td>
<td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Equipamento</label>
    <select class="form-control" id="exampleFormControlSelect1">
      @foreach ($equipamentos as $equipamento)
      <option value="{{$equipamento-> id}}">{{$equipamento->equipamento}}</option>
      @endforeach
    </select>
  </div>
   </td>
  
 
</form>

</tr>
</table> 
<table>
<form>

  <tr>
    <td>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Bloco de Exercício</label> <br>
      <input type="name" name="bloco" placeholder="Bloco 2">
    
  </div>
</td>
  <td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Grupo muscular</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Grupo muscular 1</option>
      <option>Grupo muscular 2</option>
      <option>Grupo muscular 3</option>
      <option>Grupo muscular 4</option>
      <option>Grupo muscular 5</option>
    </select>
  </div>
</td>
<td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Equipamento</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Equipamento 1</option>
      <option>Equipamento 2</option>
      <option>Equipamento 3</option>
      <option>Equipamento 4</option>
      <option>Equipamento 5</option>
    </select>
  </div>
   </td>
  
 
</form>

</tr>
</table> 
<table>
<form>

  <tr>
    <td>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Bloco de Exercício</label> <br>
      <input type="name" name="bloco" placeholder="Bloco 3">
    
  </div>
</td>
  <td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Grupo muscular</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Grupo muscular 1</option>
      <option>Grupo muscular 2</option>
      <option>Grupo muscular 3</option>
      <option>Grupo muscular 4</option>
      <option>Grupo muscular 5</option>
    </select>
  </div>
</td>
<td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Equipamento</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Equipamento 1</option>
      <option>Equipamento 2</option>
      <option>Equipamento 3</option>
      <option>Equipamento 4</option>
      <option>Equipamento 5</option>
    </select>
  </div>
   </td>
  
 
</form>

</tr>
</table> 
<table>
<form>

  <tr>
    <td>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Bloco de Exercício</label> <br>
      <input type="name" name="bloco" placeholder="Bloco 4">
    
  </div>
</td>
  <td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Grupo muscular</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Grupo muscular 1</option>
      <option>Grupo muscular 2</option>
      <option>Grupo muscular 3</option>
      <option>Grupo muscular 4</option>
      <option>Grupo muscular 5</option>
    </select>
  </div>
</td>
<td>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Equipamento</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Equipamento 1</option>
      <option>Equipamento 2</option>
      <option>Equipamento 3</option>
      <option>Equipamento 4</option>
      <option>Equipamento 5</option>
    </select>
  </div>
   </td>
  
 
</form>

</tr>
</table> 

<div class="form-group">
    <button>Agendar</button>
  </div> 
@stop