@extends('template.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-right">

        <h2>Calificar</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('Sumos.index') }}"> Regresar</a>

    </div>

</div>

</div>



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



<form action="{{ route('Sumos.update',$sumos_data->id) }}" method="POST">

@csrf

@method('PUT')



 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
        <label for="exampleFormControlSelect1"><h5>Nombre del robot</h5></label>
          <input class="form-control" type="text" name="NombreRobot" value="{{$sumos_data->NombreRobot}}" readonly="readonly">
      </div>

 <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
            <label for="exampleFormControlSelect1"><h5>Nombre del equipo</h5></label>
              <input class="form-control" type="text" name="NombreEquipo" value="{{$sumos_data->NombreEquipo}}" readonly="readonly">
          </div>

</div>

 <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
            <label for="exampleFormControlSelect1"><h5>Institucion</h5></label>
              <input class="form-control" type="text" name="Institucion" value="{{$sumos_data->Institucion}}" readonly="readonly">
          </div>

</div>

 <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
            <label for="exampleFormControlSelect1"><h5>Nombre del Capitan</h5></label>
              <input class="form-control" type="text" name="NombreCapitan" value="{{$sumos_data->NombreCapitan}}" readonly="readonly">
          </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

   <div class="form-group">
                <label for="formGroupExampleInput">Ronda</label>
                <input type="Number" min="1" pattern="^[0-9]+" class="form-control" name="Ronda" value="{{$sumos_data->Ronda}}">
              </div>

</div>


<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
           <label for="exampleFormControlSelect1"><h5>Status</h5></label>
               <select class="form-control" id="exampleFormControlSelect1" name="Status"  value="{{$sumos_data->Status}}" >
               <option>En Competencia</option>
               <option>Fuera de competencia</option>

          </div>

</div>



    </div>


</div>




<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<input button type="submit" class="btn btn-primary"> </button>      
</div>>



</form>

@endsection
