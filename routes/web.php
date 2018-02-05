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

Route::get('/', 'HomeController@home');

Route::get('/agenda', 'AgendaController@agenda');

Route::get('/clientes', 'ClientesController@clientes');

Route::get('/asesores', 'AsesoresController@asesores');

Route::get('/profesionales', 'ProfesionalesController@profesionales');

Route::get('/productos', 'ProductosController@productos');

Route::get('/expos', 'HomeController@expos');

Route::get('/pagos', 'AsesoresController@pagos');

Route::get('/inventario', 'ProductosController@inventario');