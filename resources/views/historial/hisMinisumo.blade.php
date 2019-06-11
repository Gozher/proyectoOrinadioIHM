
@extends('template.layout')

@section('content')
<div class="row">
  <div class="col-sm-3">


    <form action="/Hminisumos" method="post">
        {{ csrf_field() }}

      <div class="form-group">
           <label for="exampleFormControlSelect1"><h4>Numero de ronda</h4></label>
               <select class="form-control" id="exampleFormControlSelect1" name="cantidad">
               <option>0</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               </select>
      </div>

  </div>

  <div class="col-sm-2">
    <br><br>
    <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>      
  </div>
      

    </form>
</div>

<br><br>



<h2> <p class="text-center"> Historial Mini-Sumos </p> </h2>


    <div class="row">

       <div class="col-md-10">


        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                
        
                    <th>Id</th>
                    <th>Nombre del robot</th>
                    <th>Nombre del capitan</th>                 
                    <th>Escuela</th>
                    <th>Ronda</th>
                    <th>Status</th>

            
                </tr>
            </thead>
            <tbody>

           


        @foreach($hminisumo_consult as $lista)

                <tr>

                    <td>{{ $lista->id }}</td> 
                    <td>{{ $lista->NombreRobot }}</td> 
                    <td>{{ $lista->NombreCapitan }}</td>
                    <td>{{ $lista->Institucion }}</td>
                    <td>{{ $lista->Ronda }}</td> 
                    <td>{{ $lista->Status }}</td>
                    
                                 
                </tr>

             @endforeach
                
              </tbody>

         </table>

    </div>

 </div>


@endsection