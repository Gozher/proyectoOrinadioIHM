
@extends('template.layout')

@section('content')



<div class="row">
        
          	<form action="{{ route('Seguidores.update',$seguidores   ->id) }}" method="POST">
          		@csrf

				@method('PUT')
          	

              <div class="form-group">
                <label for="formGroupExampleInput">Nombre robot</label>
                <input type="text" class="form-control" name="NombreRobot" placeholder="" 
                value="{{$seguidores->NombreRobot}}" readonly="readonly">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Nombre capitan</label>
                <input type="text" class="form-control" name="NombreCapitan" placeholder=""
                value="{{$seguidores->NombreCapitan}}" readonly="readonly">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Nombre equipo</label>
                <input type="text" class="form-control" name="NombreEquipo" placeholder=""
                value="{{$seguidores->NombreEquipo}}" readonly="readonly">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">institucion</label>
                <input type="text" class="form-control" name="Institucion" placeholder=""
                value="{{$seguidores->Institucion}}" readonly="readonly">
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Ronda</label>
                <input type="Number" min="1" pattern="^[0-9]+" class="form-control" name="Ronda" value="{{$seguidores->Ronda}}" >
              </div>

                <div class="form-group">
                <label for="formGroupExampleInput">Tiempo</label>
                <input type="Number" min="1" pattern="^[0-9]+" class="form-control" name="Tiempo" value="{{$seguidores->Tiempo}}" step="any">
              </div>

      <div class="form-group">
       <label for="exampleFormControlSelect1"><h4>Nombre de la institucion</h4></label>
           <select class="form-control" id="exampleFormControlSelect1" name="Status">
           <option>En Competencia</option>
           <option>Fuera de competencia</option>
           
           </select>
      </div>

              <button type="submit" class="btn btn-primary">Submit</button>

          </form>



        </div>

@endsection('content')