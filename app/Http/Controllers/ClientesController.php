<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //Método clientes
    public function clientes()
    {
        $clientes = cliente::all();

        //dd($clientes);

        return view('clientes', [
            'clientes'=> $clientes,
        ]);
    }

    //Método Detalle del cliente
    public function detalleCliente($id)
    {
        //Lógica para buscar el cliente seleccionado
        $cliente = cliente::find($id);

        //Retorna la vista correspondiente
        return view('clientes.detalle',[
            'cliente' => $cliente,
        ]);
    }
}
