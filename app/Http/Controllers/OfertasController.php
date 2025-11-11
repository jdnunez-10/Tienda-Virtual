<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertasController extends Controller
{
    //

    public function ofertas(){
        return view('ofertas');
    }


    public function mostrarOfertas()
    {
        // Cargamos las ofertas activas con su producto relacionado
        $ofertas = Oferta::with('producto')
            ->whereDate('fecha_fin', '>=', now())
            ->paginate(6);

        return view('ofertas', compact('ofertas'));
    }


}
