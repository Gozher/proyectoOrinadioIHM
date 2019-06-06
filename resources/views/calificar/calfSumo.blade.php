@extends('template.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Laravel 5.8 CRUD Example from scratch - ItSolutionStuff.com</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-success" href=" "> Create New Product</a>

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

@foreach ($sumos as $sumo)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $sumo->NombreRobot }}</td>

    <td>{{ $sumo->Institucion }}</td>

    <td>

        <form action="{{ route('sumos.destroy',$sumos->id) }}" method="POST">



            <a class="btn btn-info" href="{{ route('sumos.show',$sumos->id) }}">Show</a>



            <a class="btn btn-primary" href="{{ route('products.edit',$sumos->id) }}">Edit</a>



            @csrf

            @method('DELETE')



            <button type="submit" class="btn btn-danger">Delete</button>

        </form>

    </td>

</tr>

@endforeach

</table>



{!! $products->links() !!}





@endsection



