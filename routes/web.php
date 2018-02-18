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

//------ C L I E N T E S -------
Route::get('/clientes', 'ClientesController@clientes');
Route::get('/detalleCliente/{cliente}', 'ClientesController@detalleCliente');

//------ A S E S O R E S -------
Route::get('/asesores', 'AsesoresController@asesores');

Route::get('/profesionales', 'ProfesionalesController@profesionales');

Route::get('/productos', 'ProductosController@productos');

Route::get('/expos', 'HomeController@expos');

Route::get('/pagos', 'AsesoresController@pagos');

Route::get('/inventario', 'ProductosController@inventario');

//------- Adicionadas al ejecutar "php artisan make:auth" para crear el módulo del login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//--------------------------------------------------------------------