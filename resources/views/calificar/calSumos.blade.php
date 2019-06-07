@extends('template.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-center">

       <center> <h2>Calificar Sumos</h2> </center>>

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

       < <form action="{{ route('Sumos.destroy',$sumo->id) }}" method="POST"> 

          <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="{{route('Sumos.edit',$Sumos->id)}}">Calffff</a>

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




           
        </form> 

    </td>

</tr>

@endforeach

</table>



{!! $sumos_data->links() !!}





@endsection



