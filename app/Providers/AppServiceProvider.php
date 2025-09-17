<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
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
