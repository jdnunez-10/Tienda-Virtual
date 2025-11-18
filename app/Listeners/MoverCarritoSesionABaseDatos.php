<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;
use App\Models\Carrito;
use App\Models\Producto;

class MoverCarritoSesionABaseDatos
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
   public function handle(Login $event)
    {
        $sessionCarrito = session()->get('carrito', []);

        foreach ($sessionCarrito as $item) {

            $producto = Producto::find($item['id']);
            if (!$producto) continue;

            $carrito = Carrito::firstOrNew([
                'user_id' => $event->user->id,
                'producto_id' => $producto->id_producto
            ]);

            $carrito->cantidad += $item['cantidad'];
            $carrito->subtotal = $carrito->cantidad * $producto->precio;
            $carrito->save();
        }

        session()->forget('carrito'); // limpiar carrito de sesión
    }
}
