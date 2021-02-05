<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registre Sociale</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- =======================================================
  * Template Name: Squadfree - v2.3.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">
        
            <a href="{{ url('/') }}"><img src="assets/img/logo.png" ></a>
              
        
          <span>Registre Sociale</span></a></h1>
      
      </div>

      <nav class="nav">
      <div class="">
  <a  class="icon" data-toggle="dropdown">
  <img src="img/noti.png" alt="" style="height:30px;width:30px;">@if (auth()->user()->unreadNotifications->count()>0) <span class="caret">{{auth()->user()->unreadNotifications->count()}}</span>@endif
</a>
  <div class="dropdown-menu">
      @foreach(auth()->user()->unreadNotifications as $n)
    <a class="dropdown-item" href="#">{{$n->data['message']}}</a>
      @endforeach
  </div>
</div>
       <div>
              @guest
                           
                                <a class="text-body" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            @if (Route::has('register'))
                               
                                <a class="text-body" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="text-body dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           
                        @endguest 
                        </div>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
   <section id="hero-app">
    
  </section><!-- End Hero -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
