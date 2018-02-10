@extends('layouts.app')

@section('content')
    <div class="content">
        <!-- <div class="title m-b-md"> -->
        <div>
            Clientes
        </div>


        <div class="links">
            <!-- <a href="/">Home</a> -->
            <!-- <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a> -->
        </div>
        <div class="row">
            <?php 
                //dd($clientes);
                // $clientes.lenght
            ?>
                        
            @forelse($clientes as $cliente)
                <!-- <div class="col-6"> -->
                    <a href='/detalleCliente/{{$cliente->id}}'>{{ $cliente->rut }} - </a>
                    <p> {{ $cliente->nombre }} {{ $cliente->apellido }}</p>
                    <!-- <p>{{-- $cliente->apellido --}}</p> -->
                    <!-- <p>{{-- $cliente->created_at --}}</p> -->
                <!-- </div> -->
            @empty
                <p>No existen clientes registrados en el sistema.</p>
            @endforelse
            
            
        </div>
    </div>
@endsection

