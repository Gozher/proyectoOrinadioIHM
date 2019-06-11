
<?php

ini_set('max_execution_time', 300); 

?>



@extends('template.layout')

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif


<h2> <p class="text-center"> Calificar Mini-sumos </p> </h2>


    <div class="row">

       <div class="col-md-10">


        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                
        
                    <th>Id</th>
                    <th>Nombre del robot</th>                
                    <th>Escuela</th>
                    <th>Action</th>  
            
                </tr>
            </thead>
            <tbody>

           


        @foreach($grupo_a as $lista)

                <tr>

                    <td>{{ $lista->id }}</td> 
                    <td>{{ $lista->NombreRobot }}</td> 
                    <td>{{ $lista->Institucion }}</td> 
                    <td>
                    <a class="btn btn-primary" 
                       href="{{ route('Minisumos.edit',$lista->id) }}">Calificar
                    </a> 
                    </td>   
                                 
                </tr>

             @endforeach
                
              </tbody>

         </table>

    </div>

 </div>


@endsection