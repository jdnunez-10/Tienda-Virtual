<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class InicioController extends Controller
{
    //

    public function inicio() {
        return view('inicio');
    }

     public function mostrarProductosDestacados()
    {
       $productosDestacados = Producto::where('destacado', true)->paginate(6);
       $categorias = Categoria::all();

        return view('inicio', compact('productosDestacados', 'categorias'));
    }
}
