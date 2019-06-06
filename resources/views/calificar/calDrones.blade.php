@extends('template.layout')

@section('content')

<center> <h1>Calificar de drones</h1></center>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre del robot</th>
      <th scope="col">Institucion</th>
      <th scope="col">Ronda</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Status</th>
      <th scope="col">Calificar</th>
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
      <td>
            <a class="btn btn-primary"  href="{{route('Drones.edit',$dron->id)}}">Calificar</a>

            
      </td>
    </tr>    
    @endforeach
  </tbody>
</table>





@endsection('content')
