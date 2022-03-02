@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
<div class="card">
<div class="card-header">
Manage Catagory
<div class="card-body">
<table class="table table-hover table-striped">
    <tr>
      <th >SL</th>
      <th >Catagory Name</th>
      <th >parent catagory</th>
      <th >Action</th> 
    </tr>
           @foreach($catagorys as $key=>$data)
         <tr>
            <th scope="row">{{$key+1}}</th>
            <td >{{$data->name}}</td>
            <td>
          @if($data->parent_id == NULL)
          primay Catagory
          @else
          {{$data->parent->name}}
          @endif
          </td>
      <td><a href="{{route('catagory.edit',$data->id)}}"  class="btn btn-success"> Edit</a>
      <a href=" {{route('delete.catagory',$data->id)}} "  class="btn btn-success"> Delete</a></td>
    </tr>
@endforeach
    </table>
</div>
</div>
</div>
</div>

  </div>
  
  <!-- main-panel ends -->
@endsection
