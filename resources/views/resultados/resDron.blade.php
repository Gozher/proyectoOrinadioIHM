@extends('template.layout')

@section('content')

<center> <h1>Resultados de drones</h1></center>
<hr>

<div class="row">
  <div class="col-sm-3">


    <form action="/resDronesPost" method="post">
        {{ csrf_field() }}

      <div class="form-group">
           <label for="exampleFormControlSelect1"><h4>Numero de ronda</h4></label>
               <select class="form-control" id="exampleFormControlSelect1" name="cantidad">
               <option>0</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               </select>
      </div>

  </div>

  <div class="col-sm-2">
    <br><br>
    <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>      
  </div>
      

    </form>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre del robot</th>
      <th scope="col">Institucion</th>
      <th scope="col">Ronda</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

  @foreach($drones as $dron)
    <tr>
      <th>{{$dron->NombreRobot}}</th>
      <td>{{$dron->Institucion}}</td>
      <td>{{$dron->Ronda}}</td>
      <td>{{$dron->Tiempo}}</td>
      <td>{{$dron->Status}}</td>
    </tr>    
    @endforeach
  </tbody>
</table>

@endsection('content')