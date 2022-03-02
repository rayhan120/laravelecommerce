@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
     <div class="card">
      <div class="card-header">
       Edit catagory
       </div>
       <div class="card-body">

         <form action="{{route('catagory.update',$catagorys->id)}}" method="post" enctype="multipart/from-data">
         @csrf
         @method('PUT')

        <div class="from-group">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="name" class="form-control" id="name"  value="{{$catagorys->name}}">
        </div>

       <div class="mb-3 form-check">
  <label for="image">please upload catagory image </label>
  <input type="file" name="image" class="from-control" value="{{$catagorys->image}}">
  </div>
  <br>
       <textarea name="description" rows="8" cols="80"  class="from-control" value="{{$catagorys->description}}">description</textarea>
       <div class="mb-3">

 <div class="mb-3 from-group">
    <label for="exampleInputPassword1" >please Select a primary catagory</label>
       <select class="from-control" name="parent_id" >
       @foreach($main_catagory as $catagory)
       <option value="{{$catagory->id}}"> {{$catagory->name}}</option>
       @endforeach
</select>
   </div>
        <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update catagory</button>
</form>
</div>
</div>
</div>
</div>

  </div>
  <!-- main-panel ends -->
@endsection
