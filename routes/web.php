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



// Rutas del carrito (accesibles para todos, pero con lógica diferente según autenticación)
Route::post('/carrito/agregar/{id_producto}', [CarritoController::class, 'agregar'])
    ->name('carrito.agregar');




// Ruta para procesar el checkout (solo usuarios autenticados)
Route::middleware(['auth'])->group(function () {

Route::get('/carrito', [CarritoController::class, 'verCarrito'])
    ->name('carrito.ver');

Route::delete('/carrito/quitar/{id_producto}', [CarritoController::class, 'quitar'])
    ->name('carrito.quitar');

Route::patch('/carrito/actualizar/{id_producto}', [CarritoController::class, 'actualizar'])
    ->name('carrito.actualizar');


    Route::get('/checkout', [CarritoController::class, 'checkout'])
        ->name('checkout');
    
    Route::post('/procesar-pago', [CarritoController::class, 'procesarPago'])
        ->name('procesar.pago');
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
