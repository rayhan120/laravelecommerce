@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
<div class="card">
<div class="card-header">
Add Product
<div class="card-body">

<form action="{{route('catagory.store')}}" method="post" enctype="multipart/form-data">
@csrf
@include('admin.pages.messege')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
   
    <div class="mb-3">
    <label for="image" class="form-label">catagory Image(optional)</label>
    <input type="file" name="image" class="form-control" id="image" >
   </div>
  
   <div class="mb-3 from-group">
    <label for="exampleInputPassword1" >Parent catagory(optional)</label>
       <select class="from-control" name="parent_id" >
       @foreach($main_catagory as $catagory)
       <option value="{{$catagory->id}}"> {{$catagory->name}}</option>
       @endforeach
</select>
   </div>

  <textarea name="description" rows="8" cols="80"  class="from-control">Description</textarea>
  <div class="mb-3">
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Add catagory</button>
</form>

</div>
</div>
</div>

  </div>
  <!-- main-panel ends -->
@endsection
