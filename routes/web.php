<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CartController;
use App\Models\Categoria;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', 
[InicioController::class, 'inicio'])->name('inicio');

Route::get('/', 
[CategoriasController::class, 'mostrarCategorias'])->name('mostrarCategorias');

Route::get('/inicio', 
[ProductosController::class, 'mostrarProductosDestacados'])->name('inicio');

Route::get('/productos', 
[ProductosController::class, 'mostrarEnProductos'])->name('mostrarEnProductos');


Route::get('/productos', 
[ProductosController::class, 'productos'])->name('productos');

Route::get('/categorias', 
[CategoriasController::class, 'categorias'])->name('categorias');

Route::get('/ofertas', 
[OfertasController::class, 'ofertas'])->name('ofertas');

Route::get('/contacto', 
[ContactoController::class, 'contacto'])->name('contacto');


//RUTAS DEL CARRITO

Route::prefix('cart')->name('cart.')->group(function () {
    Route::post('/add', 
    [CartController::class, 'addToCart'])->name('add');

    Route::post('/remove-product', 
    [CartController::class, 'removeFromCart'])->name('remove-product');

    Route::post('/check-status', 
    [CartController::class, 'checkProductStatus'])->name('check-status');
    
    Route::get('/view', 
    [CartController::class, 'viewCart'])->name('view');

    Route::patch('/update/{id}', 
    [CartController::class, 'updateQuantity'])->name('update');

    Route::delete('/remove/{id}', 
    [CartController::class, 'removeItem'])->name('remove');

    Route::delete('/clear', 
    [CartController::class, 'clearCart'])->name('clear');

    Route::get('/checkout', 
    [CartController::class, 'checkout'])->name('checkout');

    Route::post('/process-payment', 
    [CartController::class, 'processPayment'])->name('process-payment');

    Route::get('/payment-success', 
    [CartController::class, 'paymentSuccess'])->name('pago-exitoso');

    
});
