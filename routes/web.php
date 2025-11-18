<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CarritoController;    

use App\Models\Categoria;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', 
[InicioController::class, 'inicio'])->name('inicio');

Route::get('/inicio', 
[InicioController::class, 'mostrarProductosDestacados'])->name('inicio');

Route::get('/productos', 
[ProductosController::class, 'productos'])->name('productos');

Route::get('/', 
[ProductosController::class, 'mostrarEnProductos'])->name('productos');

Route::get('/', 
[ProductosController::class, 'mostrarCategorias'])->name('productos');


Route::get('/categorias', 
[CategoriasController::class, 'categorias'])->name('categorias');

Route::get('/categorias', 
[CategoriasController::class, 'mostrarCategoriasEnCategorias'])->name('categorias');

Route::get('/ofertas', 
[OfertasController::class, 'ofertas'])->name('ofertas');


Route::get('/ofertas', 
[OfertasController::class, 'mostrarOfertas'])->name('ofertas');


Route::get('/contacto', 
[ContactoController::class, 'contacto'])->name('contacto');


//RUTAS DEL CARRITO

 Route::middleware('auth')->group(function () {
    Route::get('/carrito',
    [CarritoController::class, 'verCarrito'])->name('carrito.ver');
   
    //Route::post('/carrito/agregar/{id_producto}',

    //[CarritoController::class, 'agregar'])->name('carrito.agregar');

    Route::delete('/carrito/quitar/{id_producto}',
    [CarritoController::class, 'quitar'])->name('carrito.quitar');
});   

    
;
