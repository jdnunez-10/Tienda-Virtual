<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CarritoController;
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

Route::post('carrito/agregar/{id_producto}',
 [CarritoController::class, 'agregar'])->name('carrito.agregar');

 Route::middleware('auth')->group(function () {
    Route::get('/carrito',
    [CarritoController::class, 'verCarrito'])
    ->middleware('auth') 
    ->name('carrito.ver');
   
   
    Route::delete('/carrito/quitar/{id_producto}',
    [CarritoController::class, 'quitar'])->name('carrito.quitar');
});   



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
