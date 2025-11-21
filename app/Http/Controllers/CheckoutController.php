<?php

namespace App\Http\Controllers;
use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\DetallePedido;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //

  public function checkout()
{
    // Verificar que el usuario esté autenticado
    if (!Auth::check()) {
        return redirect()->route('login')
            ->with('info', 'Debes iniciar sesión para realizar el pedido.');
    }

    // Obtener items del carrito
    $items = Carrito::with('producto')
                    ->where('user_id', Auth::id())
                    ->get();

    // Verificar que el carrito no esté vacío
    if ($items->isEmpty()) {
        return redirect()->route('carrito.ver')
            ->with('error', 'Tu carrito está vacío.');
    }

    // Calcular total
    $total = $items->sum('subtotal');

    return view('checkout', compact('items', 'total'));
}

/**
 * Procesar el pago
 */
public function procesarPago(Request $request)
{
    // Validar datos del formulario
    $validator = Validator::make($request->all(), [
        'nombre_completo' => 'required|string|max:255',
        'telefono' => 'required|string|max:20',
        'direccion' => 'required|string',
        'ciudad' => 'required|string|max:100',
        'metodo_pago' => 'required|in:tarjeta,paypal',
        // Validaciones condicionales para tarjeta
        'numero_tarjeta' => 'required_if:metodo_pago,tarjeta|nullable|string',
        'nombre_tarjeta' => 'required_if:metodo_pago,tarjeta|nullable|string',
        'fecha_expiracion' => 'required_if:metodo_pago,tarjeta|nullable|string',
        'cvv' => 'required_if:metodo_pago,tarjeta|nullable|string',
        // Validación para PayPal
        'paypal_email' => 'required_if:metodo_pago,paypal|nullable|email',
    ], [
        'nombre_completo.required' => 'El nombre completo es obligatorio',
        'telefono.required' => 'El teléfono es obligatorio',
        'direccion.required' => 'La dirección es obligatoria',
        'ciudad.required' => 'La ciudad es obligatoria',
        'metodo_pago.required' => 'Debes seleccionar un método de pago',
        'numero_tarjeta.required_if' => 'El número de tarjeta es obligatorio',
        'nombre_tarjeta.required_if' => 'El nombre del titular es obligatorio',
        'fecha_expiracion.required_if' => 'La fecha de expiración es obligatoria',
        'cvv.required_if' => 'El CVV es obligatorio',
        'paypal_email.required_if' => 'El email de PayPal es obligatorio',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Obtener items del carrito
    $items = Carrito::with('producto')
                    ->where('user_id', Auth::id())
                    ->get();

    if ($items->isEmpty()) {
        return redirect()->route('carrito.ver')
            ->with('error', 'Tu carrito está vacío.');
    }

    // Validar stock una vez más antes de procesar
    foreach ($items as $item) {
        if ($item->cantidad > $item->producto->cantidad) {
            return redirect()->route('carrito.ver')
                ->with('error', "No hay suficiente stock del producto: {$item->producto->nombre_producto}");
        }
    }

    // Calcular totales
    $subtotal = $items->sum('subtotal');
    $impuestos = $subtotal * 0.15;
    $total = $subtotal + $impuestos;

    // Crear el pedido
    $pedido = Pedido::create([
        'user_id' => Auth::id(),
        'nombre_completo' => $request->nombre_completo,
        'telefono' => $request->telefono,
        'direccion' => $request->direccion,
        'ciudad' => $request->ciudad,
        'codigo_postal' => $request->codigo_postal,
        'notas' => $request->notas,
        'metodo_pago' => $request->metodo_pago,
        'subtotal' => $subtotal,
        'impuestos' => $impuestos,
        'total' => $total,
        'estado' => 'pendiente',
        'numero_pedido' => 'PED-' . strtoupper(uniqid()),
    ]);

    // Guardar los detalles del pedido y actualizar stock
    foreach ($items as $item) {
        DetallePedido::create([
            'pedido_id' => $pedido->id,
            'producto_id' => $item->producto_id,
            'cantidad' => $item->cantidad,
            'precio_unitario' => $item->producto->precio,
            'subtotal' => $item->subtotal,
        ]);

        // Actualizar stock del producto
        $producto = $item->producto;
        $producto->cantidad -= $item->cantidad;
        $producto->save();
    }

    // Procesar según método de pago
    if ($request->metodo_pago === 'tarjeta') {
        // Aquí iría la integración real con una pasarela de pago
        // Por ahora solo simularemos el proceso
        
        // Guardar datos de la tarjeta de forma segura (encriptados)
        // NOTA: En producción NUNCA guardes el CVV
        $pedido->update([
            'ultimos_4_digitos' => substr($request->numero_tarjeta, -4),
            'nombre_titular' => $request->nombre_tarjeta,
        ]);

        $metodoPagoTexto = 'Tarjeta terminada en ' . substr($request->numero_tarjeta, -4);
        
    } elseif ($request->metodo_pago === 'paypal') {
        // Aquí iría la integración con PayPal
        $pedido->update([
            'paypal_email' => $request->paypal_email,
        ]);

        $metodoPagoTexto = 'PayPal (' . $request->paypal_email . ')';
    }

    // Vaciar el carrito
    Carrito::where('user_id', Auth::id())->delete();

    // Redirigir a página de confirmación
    return redirect()->route('pedido.confirmacion', $pedido->id)
        ->with('success', '¡Pedido realizado con éxito!');
}

/**
 * Mostrar confirmación del pedido
 */
public function confirmacion($pedido_id)
{
    $pedido = Pedido::with('detalles.producto')
                    ->where('id', $pedido_id)
                    ->where('user_id', Auth::id())
                    ->firstOrFail();

    return view('pedido-confirmacion', compact('pedido'));
}

}
