@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
     <div class="card">
      <div class="card-header">
       Edit Product
       </div>
       <div class="card-body">

         <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/from-data">
         @csrf
         @method('PUT')

        <div class="from-group">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title"  value="{{$product->title}}">
        </div>

         <div class="from-group">
         <label for="exampleInputEmail1" class="form-label">price</label>
        <input type="numbert" name="price" class="form-control" id="price"  value="{{$product->price}}">
        </div>

        <div class="from-group">
        <label for="exampleInputEmail1" class="form-label">Quaintity</label>
        <input type="number" name="quantity" class="form-control" id="quantity"  value="{{$product->quantity}}">
        </div>
        
       <div class="mb-3 form-check">
  <label for="">please upload product image </label>
  <input type="file" name="image" class="from-control" value="{{$product->image}}">
  </div>
  <br>
       <textarea name="description" rows="8" cols="80"  class="from-control" value="{{$product->description}}"> Description</textarea>
       <div class="mb-3">
        <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update Product</button>
</form>
</div>
</div>
</div>
</div>

  </div>
  <!-- main-panel ends -->
@endsection
