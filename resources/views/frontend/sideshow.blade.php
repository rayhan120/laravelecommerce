<div class="list-group"> 
          
                      @foreach ($catagorys as $p)
                      
                      <a href="{{route('side.index',$p->slug)}}" class="list-group-item list-group-item-action" data-toggle="collapse">
                      <img  src="{{asset('/uploads/products/'.$p->image) }}" width="50" >
                     <p> {{$p->name}} </p>
                      </a>
                   @endforeach
                   
               
               </div>