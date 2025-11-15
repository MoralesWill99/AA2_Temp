<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function herreria()
    {
        return view('servicios.herreria');
    }

    public function carpinteria()
    {
        return view('servicios.carpinteria');
    }

    public function serviciosWeb()
    {
        return view('servicios.web');
    }
}