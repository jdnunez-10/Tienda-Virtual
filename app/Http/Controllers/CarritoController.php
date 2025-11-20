<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    
   public function agregar(Request $request, $id_producto)
{
    $producto = Producto::findOrFail($id_producto);

    // Si el usuario está logeado, guardar en la BD
    if (Auth::check()) {
        $carrito = Carrito::where('user_id', Auth::id())
                          ->where('producto_id', $id_producto)
                          ->first();

        if ($carrito) {
            $carrito->cantidad += 1;
        } else {
            $carrito = new Carrito([
                'user_id' => Auth::id(),
                'producto_id' => $producto->id_producto,
                'cantidad' => 1,
            ]);
        }

        $carrito->subtotal = $carrito->cantidad * $producto->precio;
        $carrito->save();
    } else {
        // Si no está logeado, guardar en sesión
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id_producto])) {
            $carrito[$id_producto]['cantidad']++;
        } else {
            $carrito[$id_producto] = [
                'id' => $producto->id_producto,
                'nombre' => $producto->nombre_producto,
                'precio' => $producto->precio,
                'imagen' => $producto->imagen_producto,
                'cantidad' => 1,
            ];
        }

        session()->put('carrito', $carrito);
    }

    return back()->with('success', 'Producto agregado al carrito.');
}

public function verCarrito()
{
    if (Auth::check()) {
        $items = Carrito::with('producto')
                        ->where('user_id', Auth::id())
                        ->get();
        $total = $items->sum('subtotal');
    } else {
        $items = collect(session('carrito', []));
        $total = $items->sum(function ($item) {
            return $item['precio'] * $item['cantidad'];
        });
    }

    return view('carrito', compact('items', 'total'));
}

public function quitar($id_producto)
{
    if (Auth::check()) {
        Carrito::where('user_id', Auth::id())
               ->where('producto_id', $id_producto)
               ->delete();
    } else {
        $carrito = session()->get('carrito', []);
        unset($carrito[$id_producto]);
        session()->put('carrito', $carrito);
    }

    return back()->with('info', 'Producto eliminado del carrito.');
}




public function actualizar(Request $request, $id_producto)
{
    $accion = $request->input('accion'); // 'incrementar' o 'decrementar'

    if (Auth::check()) {
        // Usuario autenticado - actualizar en BD
        $carrito = Carrito::where('user_id', Auth::id())
                          ->where('producto_id', $id_producto)
                          ->first();

        if ($carrito) {
            if ($accion === 'incrementar') {
                $carrito->cantidad += 1;
            } elseif ($accion === 'decrementar' && $carrito->cantidad > 1) {
                $carrito->cantidad -= 1;
            }

            // Recalcular subtotal
            $producto = Producto::findOrFail($id_producto);
            $carrito->subtotal = $carrito->cantidad * $producto->precio;
            $carrito->save();
        }
    } else {
        // Invitado - actualizar en sesión
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id_producto])) {
            if ($accion === 'incrementar') {
                $carrito[$id_producto]['cantidad']++;
            } elseif ($accion === 'decrementar' && $carrito[$id_producto]['cantidad'] > 1) {
                $carrito[$id_producto]['cantidad']--;
            }

            session()->put('carrito', $carrito);
        }
    }

    return back()->with('success', 'Cantidad actualizada correctamente.');
}

}
