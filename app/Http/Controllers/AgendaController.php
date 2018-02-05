<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    //Método agenda
    public function agenda()
    {
        return view('agenda');
    }
}
