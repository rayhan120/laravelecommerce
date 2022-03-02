

<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','laravel ecommerch project')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">

{{--navigation--}}
    @include('partial.nev')
  {{--end nevbar part--}}
  <!--start side navbar +contain-->
  
        
            <!--   side bar location-->

 
               
            @yield('container')

                  
              
                </div>
             </div>   

           </div>
        </div>
  <!--end side navbar +contain-->

@include('partial.footer')

</div>

@include('partial.script')

</body>
</html>
