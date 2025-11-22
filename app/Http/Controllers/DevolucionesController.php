<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevolucionesController extends Controller
{

    public function devoluciones() {
        return view('devoluciones');
    }
}
