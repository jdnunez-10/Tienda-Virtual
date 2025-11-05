<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use App\Models\Categoria;
use App\Models\Producto;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        View::composer('*', function ($view) {
        $view->with('categorias', Categoria::all());
    });

           View::composer('*', function ($view) {
        $view->with('productos', Producto::all());
    });

        Schema::defaultStringLength(191);


        // Compartir datos del carrito en todas las vistas
        View::composer('*', function ($view) {
            if (session()->isStarted()) {
                $cartCount = Cart::getCartCount();
                $view->with('globalCartCount', $cartCount);
            } else {
                $view->with('globalCartCount', 0);
            }
        });
    }
}
