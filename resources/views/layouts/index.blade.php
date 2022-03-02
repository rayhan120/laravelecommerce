
@extends('master')

@section('container')
         
   
  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
                
                <div class="col-md-4">
                @include('partial.sidebar')
                
                </div> 
      <div class="col-md-8">
                  <div class="widget">
                    <h3>Featured Products</h3>
                  @include('admin.pages.productall')      
                  
                  </div> 
      </div>
    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection
