<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', 
[InicioController::class, 'inicio'])->name('inicio');


Route::get('/productos', 
[ProductosController::class, 'productos'])->name('productos');

Route::get('/categorias', 
[CategoriasController::class, 'categorias'])->name('categorias');

Route::get('/ofertas', 
[OfertasController::class, 'ofertas'])->name('ofertas');

Route::get('/contacto', 
[ContactoController::class, 'contacto'])->name('contacto');
