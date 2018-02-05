<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoresController extends Controller
{
    //Método asesores
    public function asesores()
    {
        return view('asesores');
    }

    //Método Pagos
    public function pagos()
    {
        return view('pagos');
    }
}
