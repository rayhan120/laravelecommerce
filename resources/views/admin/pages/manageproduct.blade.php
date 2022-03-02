@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
<div class="card">
<div class="card-header">
Manage Product
<div class="card-body">

<table class="table table-hover table-striped">
    <tr>
      <th >SL</th>
      <th >title</th>
      <th >Quantity</th>
      <th >Description</th> 
       <th >catagory</th> 
       <th >brand</th> 
       <th >image</th> 
      <th >Action</th> 
    </tr>

  @foreach($products as $key=>$data)

    <tr>
      <td >{{$key+1}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->productcatagory->name}}</td>
       <td>{{$data->produbrand->name}}</td>

      <td><img width="80px" src="{{url('/uploads/products/'.$data->image)}}"  alt=""></td>
      <td><a href="{{route('product.edit', $data->id)}}"  class="btn btn-success"> Edit</a>
      <a href="{{route('delete.product', $data->id)}}"  class="btn btn-success"> Delete</a></td>


<!-- delete modal-->
 

<!-- delete modal end-->

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
