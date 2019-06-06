@extends('template.layout')

@section('content')

<div class="container-fluid">

  <h2> <p class="text-center"> Registro Para Sumo</p> </h2>
  <br>

    <form action= "/sumosave" method="POST" role="form">
    {{ csrf_field() }}
    <div class="row">

<div class="col-sm-1"></div>

      <div class="form-group">
       <label for="exampleFormControlSelect1"><h5>Nombre de la institucion</h5></label>
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
        <label for="exampleFormControlSelect1"><h5>Nombre del robot</h5></label>
          <input class="form-control" type="text" placeholder="Nombre del robot" name="NombreRobot">
      </div>

      <div class="col-sm-1"></div>

      <div class="form-group">
        <label for="exampleFormControlSelect1"><h5>Nombre del capitan</h5></label>
        <input class="form-control" type="text" placeholder="Nombre del capitan" name="NombreCapitan">
      </div>

    </div><!--findel primer row  -->

    <br>

    <div class="row">
      <div class="col-sm-1"></div>

      <div class="form-group">
        <label for="exampleFormControlSelect1"><h5>Nombre del equipo</h5></label>
        <input class="form-control" type="text" placeholder="Nombre del robot" name="NombreEquipo">
      </div>

      <div class="col-sm-1"></div>

<div class="form-group">
 <label for="exampleFormControlSelect1"><h6> ¿Pesa menos de dos kilos? </h6></label>
     <select class="form-control" id="exampleFormControlSelect1" name="Peso">
     <option>Si</option>
     <option>No</option>
     
     </select>
</div>

<div class="col-sm-1"></div>

<div class="form-group">
 <label for="exampleFormControlSelect1"><h5> ¿Mide menos de 20x20 cm? </h5></label>
     <select class="form-control" id="exampleFormControlSelect1" name="Dimensiones">
     <option>Si</option>
     <option>No</option>
     
     </select>
</div>


      <div class="col-sm-3"></div>

      <div class="col-sm-4">
        <br><br>
        <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
      </div>

    </div>
    </form>

</div>

@endsection
