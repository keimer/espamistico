@extends('layouts.app')

@section('content')
    <div class="content">
        <!-- <div class="title m-b-md"> -->
        <div class="text-left ">
            Clientes
        </div>


        <div class="links">
            <!-- <a href="/">Home</a> -->
            <!-- <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a> -->
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>

        <div class="row">
            <?php 
                //dd($clientes);
                // $clientes.lenght
                //$clientes=[]
            ?>
            @forelse($clientes as $cliente)
                <div class="col-8 text-left">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>
                            <a href='/detalleCliente/{{$cliente->id}}'>{{ $cliente->rut }}</a> - {{ $cliente->nombre }} {{ $cliente->apellido }}
                             </p>
                            <!-- <p>{{-- $cliente->apellido --}}</p> -->
                            <!-- <p>{{-- $cliente->created_at --}}</p> -->
                        </li>
                    </ul>
                </div>
            @empty
                <div class="alert alert-primary text-center" role="alert">
                    <p class="text-center">No existen clientes registrados en el sistema.</p>
                </div>
            @endforelse
            
            
        </div>
    </div>
@endsection

