@extends('template.layout')

@section('content')


<h2> <p class="text-center"> registro de Manipulacion de dron</p> </h2>
  <br>

    <form action="/Drones" method="POST" role="form">
    {{ csrf_field() }}
    <div class="row">

<div class="col-sm-1"></div>

      <div class="form-group">
       <label for="exampleFormControlSelect1"><h4>Nombre de la institucion</h4></label>
           <select class="form-control" id="exampleFormControlSelect1" name="Institucion">
           <option>UICUI</option>
           <option>UPA</option>
           <option>TESJO</option>
           <option>TESJI</option>
           <option>OTRO</option>
           </select>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1"><h4>Nombre del robot</h4></label>
          <input class="form-control" type="text" placeholder="Nombre del robot" name="NombreRobot">
      </div>

      <div class="col-sm-1"></div>

      <div class="form-group">
        <label for="exampleFormControlSelect1"><h4>Nombre del capitan</h4></label>
        <input class="form-control" type="text" placeholder="Nombre del robot" name="NombreCapitan">
      </div>

    </div>

    <br>

    <div class="row">
      <div class="col-sm-1"></div>

      <div class="form-group">
        <label for="exampleFormControlSelect1"><h4>Nombre del equipo</h4></label>
        <input class="form-control" type="text" placeholder="Nombre del robot" name="NombreEquipo">
      </div>

      <div class="col-sm-3"></div>

      <div class="col-sm-4">
        <br><br>
        <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
      </div>

    </div>
    </form>


@endsection('content')