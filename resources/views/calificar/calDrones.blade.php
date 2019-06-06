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
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="{{route('Drones.edit',$dron->id)}}">Calificar</a>

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calificar Dron</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>










      </td>
    </tr>    
    @endforeach
  </tbody>
</table>

@endsection('content')
