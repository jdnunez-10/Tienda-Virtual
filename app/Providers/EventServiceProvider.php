<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */

    protected $listen = [
        'Illuminate\Auth\Events\Login' => [
            \App\Listeners\MoverCarritoSesionABaseDatos::class,
        ],
    ];
    
    public function boot(): void
    {
        //
    }



}
