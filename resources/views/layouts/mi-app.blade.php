<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Espacio Místico</title> -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
                
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-4 h2 no-gutters"> 
                        Espacio Místico
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 text-sm-right">
                        <a href="#">Login</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->
            
            <!-- **************************** -->
            <!-- Barra de navegacion -->
            <!-- **************************** -->
            <div class="row no-gutters">
                <div class="col-sm-12">
                    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                    <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="/">Home </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/agenda">Agenda</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/clientes">Clientes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/asesores">Asesores</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/profesionales">Profesionales</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/productos">Productos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/expos">Expos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/pagos">Pagos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/inventario">Inventario</a>
                        </li>
                    </ul>
                    </div>
                    </nav>
                </div>
            </div>
            <!-- **************************** -->

            <!-- <div class="container"> -->
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-3 ">
                        @yield('submenu')  
                    </div>
                    <div class="col-sm-1 ">  
                    </div>
                    <div class="col-sm-12 col-md-8">
                        @yield('content')  
                    </div>
                </div>

            <!-- </div> -->
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
