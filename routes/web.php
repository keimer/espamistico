<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //Como usar variables en PHP y pasarla como parametro a la vista
    $links = [
        '/clientes' => 'Clientes',
        '/asesores' => 'Asesores', 
        '/profesionales' => 'Profesionales',
        '/productos' => 'Productos',
        '/expos' => 'Expos',
        '/pagos' => 'Pagos',
        '/inventario' => 'Inventario',
    ];
    return view('welcome', [
        'links' => $links
    ]);
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/asesores', function () {
    return view('asesores');
});

Route::get('/profesionales', function () {
    return view('profesionales');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/expos', function () {
    return view('expos');
});

Route::get('/pagos', function () {
    return view('pagos');
});

Route::get('/inventario', function () {
    return view('inventario');
});