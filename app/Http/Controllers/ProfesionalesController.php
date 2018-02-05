<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesionalesController extends Controller
{
    //Método profesionales
    public function profesionales()
    {
        return view('profesionales');
    }
}
