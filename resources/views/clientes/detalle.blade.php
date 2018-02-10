@extends('layouts.app')

@section('content')

    <div class="col-6 text-left">
        <p> Id:         {{ $cliente->id}}</p>
        <p> Rut:        {{ $cliente->rut}}</p>
        <p> Pasaporte:  {{ $cliente->pasaporte}}</p>
        <p> Nombre:     {{ $cliente->nombre}}</p>
        <p> Apellido:   {{ $cliente->apellido}}</p>
        <p> Direccion:  {{ $cliente->direccion}}</p>
        <p> Teléfono:   {{ $cliente->telefono}}</p>
        <p> Celular:    {{ $cliente->celular}}</p>
        <p> Email:      {{ $cliente->email}}</p>
        <p> Celular:    {{ $cliente->celular}}</p>
        <p> Fecha Incio:{{ $cliente->celular}}</p>
        
    </div>

@endsection