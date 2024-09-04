<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Naijawears.com</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/tooplate-main.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/flex-slider.css">
    <link rel="stylesheet" href="\assets\coverflow\dist\jquery.flipster.min.css">
    <link rel="stylesheet" href="/assets/coverflow/demo/demo.css">
    <link rel="stylesheet" href="/assets/css/morphbutton.css">

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script><script src="/assets/js/owl.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/flex-slider.js"></script>
    <script src="/assets/js/lga.js"></script>
    <script src="/assets/js/lga.min.js"></script>
    <script src="\assets\coverflow\dist\jquery.flipster.min.js"></script>
    <script src="/assets/js/jquery.morphbutton.js"></script>

  </head>

  <body style="">

    <!-- Pre Header -->
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/"><h5 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><i class="fa fa-shirtsinbulk"></i> Naija<element style="color:lightgreen;">Wears</element></h5></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @if (Auth::user())
        
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: 'poppins', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home')}}"><i class="fa fa-home"></i> Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('allproducts') }}"><i class="fa fa-filter"></i> Products</a>
            </li>
            
           
            <li class="nav-item">
              @props(['count'])
              <a class="nav-link" href="/cart"><i class="fa fa-shopping-cart"></i> Cart <element style="color:brown">({{ $count }})</element> </a>
            </li>
            
            
            <form class="nav-link" method="POST" action="/signout" enctype="multipart/form-data">
            @csrf
            <li class="nav-item">
            <button type="submit" style="background-color:#005555; color: white; border-radius: 10px; text-align: center; padding:5px 10px; outline:none; border:1px solid white; cursor:pointer; font-weight:bold;"><i class="fa fa-sign-out"></i> SIGNOUT</button>
            </li>
            </form>
            
            <h5 style="font-weight:bold; margin-top:8px; text-transform:uppercase; font-size:13px;" id=""> Welcome, <element class="username" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> {{  auth()->user()->name }} </element> </h5>
          </ul>
          
        </div>
        
        @else
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: 'poppins', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home')}}"><i class="fa fa-home"></i> Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('allproducts') }}"><i class="fa fa-filter"></i> Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cart"><i class="fa fa-shopping-cart"></i> Cart  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signup"><i class="fa fa-sign-out"></i> Create Account  </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" id="signup" href="/signin" style=" border-radius: 10px; text-align: center;"><i class="fa fa-sign-in"></i> Sign in </a>
            </li>
          </ul>
        </div>
        @endauth
      </div>
      {{$slot}}
    </nav>


    <script language = "text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>

<script>
  setTimeout(function show(){
      $("#welcome").fadeOut();
  }, 5000);
</script>

