@if($errors->any())
<div class="alart alart-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<ul>
   @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
  @endforeach
  </ul>
  </div>
@endif

@if(Session::has('success') )
<div class="alart alart-success">
<p>{{Session::get('success')}}</p>
</div>
 @endif

 @if(session::has('error') )
<div class="alart alart-danger">
 <p>{{ session::get('error')}}</p>
</div>
 @endif