<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{config('app.nameKZ', 'Mi Espacio Místico')}}
        {{--  Espacio Místico  --}}
    </title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
            <div class="container">
                <nav class="navbar navbar-light static-top navbar-toggleable-md">
                    <!-- <div class="container"> -->
                        <!-- Branding Image -->
                        <a class="navbar-brand ml-auto" href="{{ url('/') }}">
                            {{config('app.nameKZ', 'Mi Espacio Místico')}}
                            
                        </a>
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <!-- <ul class="navbar-nav">
                                &nbsp;
                            </ul> -->

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item ml-auto"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                                    <li class="nav-item ml-auto"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu">
                                            
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Salir
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    <!-- </div> -->
                </nav>
            </div>
            </div>
            <!-- <div class="container"> -->
            <div class="row">
                @yield('menu')
            </div>
            <div class="row">
                <div class="col-sm-12 ">
                    @yield('content')
                </div>
            </div>
        </div>    
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script 
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous">
    </script>
</body>
</html>
