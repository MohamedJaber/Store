<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Store</title>
         <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="/css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a>
                        <a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <b>  Welcome To Our Store </b>
                </div>
            </div>
        </div>


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
                <li><a href="#" class="py-2 d-block">mohamedemad662@gmail.com</a></li>
              </ul>
            </div>
          </div> 
        </div>
         <div id='social'> <a href="https://www.facebook.com/mohamed.emad.50999" class="fa fa-facebook"></a>
            <a href="https://twitter.com/memad143" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UC_aBHB5dezdhVRNojoPM4nA?view_as=subscriber" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/mohamed_emad_97/" class="fa fa-instagram"></a>
          </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to Mohamed emad <i class="aria-hidden="true"></i> by <a href="#" target="_blank">Mo</a> </p>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>
