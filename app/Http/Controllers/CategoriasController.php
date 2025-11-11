<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    //

    public function categorias() {
        return view('categorias');
    }

    public function mostrarCategorias()
    {
        $categorias = Categoria::all();

        return view('inicio', 'productos', compact('categorias'));
    }

    public function mostrarCategoriasEnCategorias()
{
    $categorias = Categoria::withCount('productos')->get();
    return view('categorias', compact('categorias'));
}
}
