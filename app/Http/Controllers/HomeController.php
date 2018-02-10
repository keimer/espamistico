<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Método Home, página inicial
    public function home()
    {
        //Como usar variables en PHP y pasarla como parametro a la vista
        $links = [
            '/agenda' => 'Agenda',
            '/clientes' => 'Clientes',
            '/asesores' => 'Asesores', 
            '/profesionales' => 'Profesionales',
            '/productos' => 'Productos',
            '/expos' => 'Expos',
            '/pagos' => 'Pagos',
            '/inventario' => 'Inventario',
        ];
        return view('home', [
            'links' => $links
        ]);
    }

    //Método expos
    public function expos()
    {
        return view('expos');
    }

} //Fin class HomeController
