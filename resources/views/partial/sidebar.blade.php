
   
                      
<div class="list-group">
  @foreach ( $r as $parent)
    <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action" data-toggle="collapse">
      <img src="{!! asset('/uploads/products/'.$parent->image) !!}" width="50">
      {{ $parent->name }}
    </a>
    <div class="collapse
      @if (Route::is('side.show'))
        @if (App\Models\Category::ParentOrNotCategory($parent->id, $catagorys->id))
          show
        @endif
      @endif
    " id="main-{{ $parent->id }}">
      <div class="child-rows">
        @foreach ($r as $child)
          <a href="{!! route('side.show', $child->id) !!}" class="list-group-item list-group-item-action
            @if (Route::is('side.show'))
              @if ($child->id == $catagorys->id)
                active
              @endif
            @endif
            ">
            <img src="{!! asset('/uploads/products/'.$child->image) !!}" width="30">
            {{ $child->name }}
          </a>
        @endforeach
      </div>


    </div>
  @endforeach
</div>

              