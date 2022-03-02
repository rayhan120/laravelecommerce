@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
     <div class="card">
      <div class="card-header">
       Edit Brand
       </div>
       <div class="card-body">

         <form action="{{route('brand.update',$brands->id)}}" method="post" enctype="multipart/form-data">
         @csrf
         @method('PUT')

        <div class="from-group">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="name" class="form-control" id="name"  value="{{$brands->name}}">
        </div>

       <div class="mb-3 form-check">
  <label for="image">please upload Brand image </label>
  <input type="file" name="image" class="from-control" value="{{$brands->image}}">
  </div>
  <br>
       <textarea name="description" rows="8" cols="80"  class="from-control" value="{{$brands->description}}">description</textarea>
       <div class="mb-3">

 <
        <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update Brand</button>
</form>
</div>
</div>
</div>
</div>

  </div>
  <!-- main-panel ends -->
@endsection
