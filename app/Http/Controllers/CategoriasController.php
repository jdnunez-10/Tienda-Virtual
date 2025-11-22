<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

use function Ramsey\Uuid\v1;

class CategoriasController extends Controller
{
    //

    public function categorias() {
        return view('categorias');
    }


    public function mostrarCategoriasEnCategorias()
{
    $categorias = Categoria::withCount('productos')->get();
    return view('categorias', compact('categorias'));
}


}
