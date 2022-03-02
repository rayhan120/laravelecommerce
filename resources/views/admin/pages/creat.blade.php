@extends('admin.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
<div class="card">
<div class="card-header">
Add Product
<div class="card-body">


<form action="{{route('admin.pages.store')}}" method="post" enctype="multipart/form-data">
@csrf
@include('admin.pages.messege')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="numbert" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quaintity</label>
    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
                <label for="image" >Please upload product image</label>
                <input type="file" id="image" name="image" class="form-control" aria-describedby="emailHelp">
            </div>
            

  <textarea name="description" rows="8" cols="80"  class="from-control"> </textarea>
  <div class="mb-3">
  
<div class="form-group">
         <label for="exampleInputPassword1" > Select catagory: </label>

       <select class="form-control" name="category_id" id="category_id">

           @foreach($catagorys as $data)

           <option value="{{$data->id}}">{{$data->name}} </option>

            @endforeach
    

        </select>
     </div>

     <div class="form-group">
         <label for="exampleInputPassword1" > Select Brand: </label>

       <select class="form-control" name="brand_id" id="brand_id">

           @foreach($brands as $data)

           <option value="{{$data->id}}">{{$data->name}} </option>

            @endforeach
    

        </select>
     </div>

  <button type="submit" class="btn btn-primary">Add product</button>
</form>

</div>
</div>
</div>

  </div>
  <!-- main-panel ends -->
@endsection
