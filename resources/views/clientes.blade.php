@extends('layouts.app')

@section('submenu')
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Crear</a>
<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Modificar</a>
<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
</div>
<div class="tab-content" id="v-pills-tabContent">
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">creando...</div>
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Modificando...</div>
<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Otro...</div>
<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Ultimo...</div>
</div>
@endsection

@section('content')
    <div class="content">
        <!-- <div class="title m-b-md"> -->
        <div class="text-left ">
            Clientes
        </div>


        <!-- <div class="links"> -->
            <!-- <a href="/">Home</a> -->
            <!-- <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a> -->
        <!-- </div> -->

        <!-- <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div> -->

        <div class="row">
            <?php 
                //dd($clientes);
                // $clientes.lenght
                $clientes=[]
            ?>
            @forelse($clientes as $cliente)
                <div class="col-8 text-left">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>
                            <a href='/detalleCliente/{{$cliente->id}}'>{{ $cliente->rut }}</a> - {{ $cliente->nombre }} {{ $cliente->apellido }}
                             </p>
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

