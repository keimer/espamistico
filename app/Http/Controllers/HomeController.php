<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

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

        // dd($links);
        return view('home', [
            'links' => $links
        ]);
        // return view('home');
    }

    //Método expos
    public function expos()
    {
        return view('expos');
    }

} //Fin class HomeController

