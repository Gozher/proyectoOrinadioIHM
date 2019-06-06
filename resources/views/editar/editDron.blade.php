
@extends('template.layout')

@section('content')



@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



{{$drones->NombreRobot}}

<div class="row">

          <form>

              <div class="form-group">
                <label for="formGroupExampleInput">Nombre robot</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" 
                value="">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Nombre capitan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Nombre equipo</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">institucion</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Ronda</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Tiempo</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Status</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>

          </form>



        </div>

        @endsection('content')

