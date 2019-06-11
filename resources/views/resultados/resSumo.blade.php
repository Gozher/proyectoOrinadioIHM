<?php

$c=0; 


        foreach ($grupo_a as $v) 

            {

                $c = $c + 1;

            }
                    

                $var_a = $c / 2; 
                
        
        if ($c%2==1)
                {    
                   
                    $var_a = $var_a + 0.5;

                }


?>



@extends('template.layout')

@section('content')




<h2> <p class="text-center"> Roles para sumo </p> </h2>


<div class="row">

<div class="col-md-6">


        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                
                    
                      
                    
                    <th>Id</th>
                    <th>Escuela</th>
                    <th>Nombre del robot</th>
                    <th>Status</th>
                    <th>Ronda</th>
                    
            
                </tr>
            </thead>
            <tbody>

           

            <?php   $ca=0;    ?>


            @foreach($grupo_a as $lista)

                @if( $ca < $var_a )

                
                        <tr>

	                        <td>{{ $lista->id }}</td> 
	                        <td>{{ $lista->Institucion }}</td> 
	                        <td>{{ $lista->NombreRobot }}</td> 
	                        <td>{{ $lista->Status }}</td> 
	                        <td>{{ $lista->Ronda }}</td> 

                                                                                                                           
                        </tr>

                        <?php  $ca = $ca + 1;   ?>

                  

                @endif

               

            @endforeach
                
        </tbody>
        </table>
</div>

<div class="col-md-6">

            <table class="table table-light">
            <thead class="thead-light">
                <tr>

                <th>Id</th>
                <th>Escuela</th>
                <th>Nombre del robot</th>
                <th>status</th>
                <th>Ronda</th>

                </tr>
            </thead>
            <tbody>


            @foreach($grupo_b as $lista)

                   
                @if ($loop->iteration > $ca)
    

                    <tr>                       

                    <td>{{ $lista->id }}</td> 
                    <td>{{ $lista->Institucion }}</td>   
                    <td>{{ $lista->NombreRobot }}</td> 
                    <td>{{ $lista->Status }}</td> 
                    <td>{{ $lista->Ronda }}</td>
                    
                                  
                    </tr>


                @endif


            @endforeach


          

</tbody>
</table>

@if ($c%2==1)

    Pasa a la siguiente ronda 

@endif



</div>
</div>




@endsection