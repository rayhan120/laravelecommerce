@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
<div class="card">
<div class="card-header">
Add brand
<div class="card-body">

<form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
@csrf
@include('admin.pages.messege')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
   
     <div class="form-group">
                <label for="image" >Please upload product image</label>
                <input type="file" id="image" name="image" class="form-control" aria-describedby="emailHelp">
            </div>
  
   <div class="form-group">
         <label for="exampleInputPassword1" > Select Brand: </label>

       <select class="form-control" name="category_id" id="category_id">

           @foreach($brands as $data)

           <option value="{{$data->id}}">{{$data->name}} </option>

            @endforeach
    

        </select>
     </div>

  <textarea name="description" rows="8" cols="80"  class="from-control">Description</textarea>
  <div class="mb-3">
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Add Brand</button>
</form>

</div>
</div>
</div>

  </div>
  <!-- main-panel ends -->
@endsection
