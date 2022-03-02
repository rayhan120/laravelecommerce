
              

              
@extends('master')

@section('container')


  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">  
      </div> 
      <div class="col-md-8">
        <div class="widget">
        
           @foreach($product as $data)
   <div class="col-md-3">
      <div class="card">
              
              <img class="card-img-top feature-img" src="{{asset('/uploads/products/'.$data->image) }}" alt="Card image" >
               
                <div class="card-body">
                 
                  <h4><a href="{{route('product.show',$data->slug)}}">{{$data->title}}</a></h4>
                  <p class="card-text">Taka - {{$data->price}}</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                  
                </div>
       </div>
      </div>        
 @endforeach     
         
        </div>
        
        <div class="widget">
        </div>
      </div>
    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection
