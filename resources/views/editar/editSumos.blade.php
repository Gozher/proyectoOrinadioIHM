@extends('template.layout')

@section('content')


<form  action="{{ route('Sumos.update',$sumos_data->id) }}" method="post" >

   @csrf
   @method('PUT')

<div class="row">

<div class="col-lg-12 margin-tb">
    
  <div class="form-group">
        <label for="exampleFormControlSelect1"><h5>Nombre del robot</h5></label>
          <input class="form-control" type="text" name="NombreRobot" value="{{$sumos_data->NombreRobot}}" readonly="readonly">
      </div>


<div class="form-group">
        <label for="exampleFormControlSelect1"><h5>Nombre del equipo</h5></label>
          <input class="form-control" type="text" name="NombreEquipo" value="{{$sumos_data->NombreEquipo}}" readonly="readonly">
      </div>

   <div class="form-group">
                <label for="formGroupExampleInput">Ronda</label>
                <input type="Number" min="1" pattern="^[0-9]+" class="form-control" name="Ronda" value="{{$sumos_data->Ronda}}">
              </div>



<div class="form-group">
       <label for="exampleFormControlSelect1"><h5>Status</h5></label>
           <select class="form-control" id="exampleFormControlSelect1" name="Status"  value="{{$sumos_data->Status}}" >
           <option>En Competencia</option>
           <option>Fuera de competencia</option>

      </div>




      
 


 </div>

  </div>


 <input type="submit" value="Calificar">  

 

</form>

@endsection
