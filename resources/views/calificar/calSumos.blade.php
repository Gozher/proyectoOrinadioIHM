@extends('template.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-center">

        <h2>Calificar Sumos</h2>

    </div>

  

</div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">

<tr>

    <th>No</th>

    <th>Name</th>

    <th>Details</th>

    <th width="280px">Action</th>

</tr>

@foreach ($sumos_data as $sumo)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $sumo->NombreRobot }}</td>

    <td>{{ $sumo->Institucion }}</td>

    <td>

        <form action="{{ route('Sumos.destroy',$sumo->id) }}" method="POST">






            <a class="btn btn-primary" href="{{ route('Sumos.edit',$sumo->id) }}">Calificar</a>



            @csrf

            @method('DELETE')



           
        </form>

    </td>

</tr>

@endforeach

</table>



{!! $sumos_data->links() !!}





@endsection



