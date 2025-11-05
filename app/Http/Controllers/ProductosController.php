<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
class ProductosController extends Controller
{
    //

    

    public function productos() {
        return view('productos');
    }

    public function mostrarProductos()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('inicio', 'productos', compact('productos', 'categorias'));
    }
}
