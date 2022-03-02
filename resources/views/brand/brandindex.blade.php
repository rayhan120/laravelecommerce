@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
<div class="card">
<div class="card-header">
Manage Brand
<div class="card-body">
<table class="table table-hover table-striped">
    <tr>
      <th >SL</th>
      <th >Brand Name</th>
      <th >Image</th>
      <th >Action</th> 
    </tr>
           @foreach($brands as $key=>$data)
         <tr>
            <th scope="row">{{$key+1}}</th>
            <td >{{$data->name}}</td>
            
          <td><img width="80px" src="{{url('/uploads/products/'.$data->image)}}"  alt=""></td>
      <td><a href="{{route('brand.edit',$data->id)}}"  class="btn btn-success"> Edit</a>
      <a href=" {{route('delete.brand',$data->id)}} "  class="btn btn-success"> Delete</a></td>
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
