@extends('template.layout')

@section('content')

<center> <h1>Resultados de drones</h1></center>
<hr>

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