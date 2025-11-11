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

    public function mostrarProductosDestacados()
    {
       $productosDestacados = Producto::where('destacado', true)->paginate(6);
       $categorias = Categoria::all();

        return view('inicio', compact('productosDestacados', 'categorias'));
    }


        public function mostrarEnProductos()
    {
        $productos = Producto::with('categoria')->paginate(6);
        $categorias = Categoria::withCount('productos')->get();

        return view('productos', compact('productos', 'categorias'));
    }

    public function mostrarCategorias()
{
    $categorias = Categoria::withCount('productos')->paginate(6);
    $productos = Producto::paginate(6);

    return view('productos', compact('categorias', 'productos'));
}

}
