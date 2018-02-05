@extends('layouts.app');

@section('content');
    <div class="content">
        <div class="title m-b-md">
            Bienvenido a Espacio Mítico....
        </div>

        <!-- //Implementando un foreach con blade -->
        <!-- <div class="links">
            @foreach($links as $link => $texto)
            <a href="{{ $link }}">{{ $texto }}</a>
            @endforeach
        </div> -->
        <!-- <div class="links">
            <a href="/clientes">Clientes</a>
            <a href="/profesionales">Profesionales</a>
            <a href="/asesores">Asesores</a>
            <a href="/productos">Productos</a>
            <a href="/expos">Expos</a>
            <a href="/pagos">Pagos</a>
            <a href="/inventario">Inventario</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div> -->
    </div>
@endsection;
