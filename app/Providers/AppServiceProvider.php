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

    }
}
