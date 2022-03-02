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
              