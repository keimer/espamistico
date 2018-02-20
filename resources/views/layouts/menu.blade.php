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
        
