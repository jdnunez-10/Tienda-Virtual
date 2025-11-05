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
       $productosDestacados = Producto::where('destacado', true)->get();
       $categorias = Categoria::all();

        return view('inicio', compact('productosDestacados', 'categorias'));
    }


        public function mostrarEnProductos()
    {
        $productos = Producto::with('categoria')->get();
    $categorias = Categoria::all();
    $productosDestacados = Producto::where('destacado', true)->take(6)->get();

    return view('productos.index', compact('productos', 'categorias', 'productosDestacados'));
    }

    public function mostrarCategorias()
{
    $categorias = Categoria::withCount('productos')->get();
    $productos = Producto::all();

    return view('productos', compact('categorias', 'productos'));
}

}
