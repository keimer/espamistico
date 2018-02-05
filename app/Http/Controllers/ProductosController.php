<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //Método productos
    public function productos()
    {
        return view('productos');
    }

    //Método productos
    public function inventario()
    {
        return view('inventario');
    }
}
