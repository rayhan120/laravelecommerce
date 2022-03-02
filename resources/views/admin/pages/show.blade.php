
@extends('master')

@section('container')
@section('title')
{{$product->title}}| Laravel ecommerce site
@endsection


  <!-- Start Sidebar + Content -->
  <div class='container margin-top-40'>
    <div class="row">
       
                          <div class="col-md-6 mt-auto">  
                             <!--slider sart-->
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                          <img class="d-block w-100" src="{{url('/uploads/products/'.$product->image)}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item ">
                                          <img class="d-block w-100" src="{{url('/uploads/products/'.$product->image)}}" alt="First slide">
                                        </div>
                                      
                                  
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                            </div>
                                            <div class="bage bage-info">catagory: <span><h6 class="btn btn-success">{{$product->productcatagory->name}} </span></h6>
                                            <br>
                                            <span>Brand:<span><h6 class="btn btn-success">{{$product->produbrand->name}} </span></h6>
                                            </div>
                                  </div>
<!--slider end-->
                            </div> 
                           <div class="col-md-5">
                                <div class="widget">
                                  <h3>{{$product->title}} </h3>
                                  <span> 
                                  <h3>{{$product->quantity<1? 'No item is  available' :$product->quantity.' '.'Item in stock' }}</h3>
                                  </span>
                                  <h3>{{$product->price}} taka</h3>
                                  <h3>{{$product->title}}</h3>
                                  <h3>{{$product->description}}</h3>
                             </div>
       
                            <div class="widget">
                          </div>
                          
    
      
      
    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection