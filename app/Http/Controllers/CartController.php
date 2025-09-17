<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    
   public function addToCart(Request $request)
{
    $request->validate([
        'nombre_producto' => 'required|string',
        'precio' => 'required|numeric',
        'cantidad' => 'required|integer|min:1',
        'imagen_producto' => 'nullable|string'
    ]);

    $idsesion = session()->getId();
    $nombreProducto = $request->nombre_producto;
    $precio = $request->precio;
    $cantidad = $request->cantidad;
    $imagenProducto = $request->imagen_producto;

    // Verificar si el producto ya existe en el carrito
    $existingItem = Cart::where('id_sesion', $idsesion)
                       ->where('nombre_producto', $nombreProducto)
                       ->first();

    if ($existingItem) {
        // Actualizar cantidad y total
        $existingItem->cantidad += $cantidad;
        $existingItem->total = $existingItem->cantidad * $precio;
        $existingItem->save();
        $action = 'updated';
    } else {
        // Crear nuevo item en el carrito
        Cart::create([
            'id_sesion' => $idsesion,
            'nombre_producto' => $nombreProducto,
            'imagen_producto' => $imagenProducto,
            'precio' => $precio,
            'cantidad' => $cantidad,
            'total' => $precio * $cantidad
        ]);
        $action = 'added';
    }

    // Obtener información actualizada del carrito
    $cartCount = Cart::getCartCount();
    $cartTotal = Cart::getCartTotal();
    
    // Verificar si el producto está en el carrito para el estado del botón
    $isInCart = Cart::where('id_sesion', $idsesion)
                   ->where('nombre_producto', $nombreProducto)
                   ->exists();

    return response()->json([
        'success' => true,
        'message' => $action === 'added' ? 'Producto agregado al carrito' : 'Cantidad actualizada',
        'cart_count' => $cartCount,
        'cart_total' => number_format($cartTotal, 2),
        'is_in_cart' => $isInCart,
        'action' => $action
    ]);
}

    //Remover producto especifico desde tarjeta
    public function removeFromCart(Request $request)
{
    $request->validate([
        'nombre_producto' => 'required|string'
    ]);

    $idsesion = session()->getId();
    $nombreProducto = $request->nombre_producto;

    // Eliminar el producto del carrito
    Cart::where('id_sesion', $idsesion)
        ->where('nombre_producto', $nombreProducto)
        ->delete();

    // Obtener información actualizada
    $cartCount = Cart::getCartCount();
    $cartTotal = Cart::getCartTotal();

    return response()->json([
        'success' => true,
        'message' => 'Producto eliminado del carrito',
        'cart_count' => $cartCount,
        'cart_total' => number_format($cartTotal, 2),
        'is_in_cart' => false
    ]);
}

        //Verificar estado del producto
        public function checkProductStatus(Request $request)
        {
            $request->validate([
                'nombre_producto' => 'required|string'
            ]);

            $idsesion = session()->getId();
            $isInCart = Cart::where('id_sesion', $idsesion)
                        ->where('nombre_producto', $request->nombre_producto)
                        ->exists();

            return response()->json([
                'is_in_cart' => $isInCart
            ]);
        }

    // Ver carrito
    public function viewCart()
    {
        $cartItems = Cart::getCartItems();
        $cartTotal = Cart::getCartTotal();
        $cartCount = Cart::getCartCount();

        return view('cart', compact('cartItems', 'cartTotal', 'cartCount'));
    }


    // Actualizar cantidad
    public function updateQuantity(Request $request, $id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::findOrFail($id);
        $cartItem->cantidad = $request->cantidad;
        $cartItem->total = $cartItem->precio * $request->cantidad;
        $cartItem->save();

        $cartTotal = Cart::getCartTotal();
        $cartCount = Cart::getCartCount();

        return response()->json([
            'success' => true,
            'cart_count' => $cartCount,
            'cart_total' => number_format($cartTotal, 2),
            'item_total' => number_format($cartItem->total, 2)
        ]);
    }

    // Eliminar item del carrito

    public function removeItem($id)
    {
        Cart::findOrFail($id)->delete();

        $cartCount = Cart::getCartCount();
        $cartTotal = Cart::getCartTotal();

        return response()->json([
            'success' => true,
            'cart_count' => $cartCount,
            'cart_total' => number_format($cartTotal, 2)
        ]);
    }

    // Limpiar carrito
    public function clearCart()
    {
        Cart::clearCart();

        return response()->json([
            'success' => true,
            'cart_count' => 0,
            'cart_total' => '0.00'
        ]);
    }

        // Proceder al checkout
    public function checkout()
    {
        $cartItems = Cart::getCartItems();
        $cartTotal = Cart::getCartTotal();
        $cartCount = Cart::getCartCount();

        if ($cartCount == 0) {
            return redirect()->route('cart.view')->with('error', 'Tu carrito está vacío');
        }

        return view('cart.checkout', compact('cartItems', 'cartTotal', 'cartCount'));
    }

    // Procesar pago (simulado)
    public function processPayment(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'metodo_pago' => 'required|string|in:credit_card,paypal,bank_transfer'
        ]);

        // Simular procesamiento de pago
        $cartItems = Cart::getCartItems();
        $cartTotal = Cart::getCartTotal();


        // Limpiar carrito después del pago exitoso
        Cart::clearCart();

        return redirect()->route('payment.success')
               ->with('success', 'Pago procesado exitosamente')
               ->with('order_total', $cartTotal);
        
        }

        // Página de éxito del pago
    public function paymentSuccess()
    {
        return view('cart.pago-exitoso');
    }

}