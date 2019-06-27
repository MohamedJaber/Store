<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Store</title>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script  href="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Home
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <footer class="ftco-footer ftco-bg-dark ftco-section" id="mo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md" id="du">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><p id='w'>Booking Bus's Ticket Service</p></h2>
              <p><a href="#" class="py-2 d-block">By this Website you can buy anything easily by clicking some buttons</a></p>
            </div>
          </div>
          <div class="col-md" id="du">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><p id='w'>Services</p></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Buy now</a></li>
                <li><a href="#" class="py-2 d-block">Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md"id="du">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><p id='w'>Contact Information</p></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Egypt, Aswan, Aswan Island(Aswanarty)</a></li>
                <li><a href="#" class="py-2 d-block">+ 201121087637</a></li>
                <li><a href="#" class="py-2 d-block">mohamedjaber662@gmail.com</a></li>
              </ul>
            </div>
          </div> 
        </div>
         <div id='social'> <a href="https://www.facebook.com/mohamed.jaber.50999" class="fa fa-facebook"></a>
            <a href="https://twitter.com/mjaber143" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UC_aBHB5dezdhVRNojoPM4nA?view_as=subscriber" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/mohamed_jaber_97/" class="fa fa-instagram"></a>
          </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to Mohamed Jaber <i class="aria-hidden="true"></i> by <a href="#" target="_blank">Mo</a> </p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
