
@extends('template.layout')

@section('content')




<h2> <p class="text-center"> Historial Sumos </p> </h2>


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

           


        @foreach($hsumo_consult as $lista)

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