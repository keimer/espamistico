<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //Método clientes
    public function clientes()
    {
        return view('clientes');
    }
}
