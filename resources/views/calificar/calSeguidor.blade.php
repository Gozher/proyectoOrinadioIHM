@extends('template.layout')

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif


<center> <h1>Calificar de seguidores</h1></center>
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

  @foreach($seguidores as $seguidor)
    <tr>
      <th>{{$seguidor->NombreRobot}}</th>
      <td>{{$seguidor->Institucion}}</td>
      <td>{{$seguidor->Ronda}}</td>
      <td>{{$seguidor->Tiempo}}</td>
      <td>{{$seguidor->Status}}</td>
      <td>
    
            <a class="btn btn-primary"  href="Seguidores/{{$seguidor->id}}/edit">Calificar</a>

            
      </td>
    </tr>    
    @endforeach
  </tbody>
</table>





@endsection('content')
