<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller
{
    //
public function productos()
{
    $categorias = Categoria::withCount('productos')->get();
    $productos = Producto::with('categoria')->paginate(6);

    return view('productos', compact('categorias', 'productos'));
}

}
