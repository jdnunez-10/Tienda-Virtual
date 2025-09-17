<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    
    protected $fillable = [
        'id_sesion',
        'nombre_producto',
        'imagen_producto',
        'precio',
        'cantidad',
        'total'
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'total' => 'decimal:2',
    ];

     // Obtener items del carrito por sesión
    public static function getCartItems($idsession = null)
    {
        $idsession = $idsession ?: session()->getId();
        return self::where('id_sesion', $idsession)->get();
    }

    // Obtener total del carrito
    public static function getCartTotal($idsession = null)
    {
        $idsession = $idsession ?: session()->getId();
        return self::where('id_sesion', $idsession)->sum('total');
    }

    // Obtener cantidad total de items
    public static function getCartCount($idsession = null)
    {
        $idsession = $idsession ?: session()->getId();
        return self::where('id_sesion', $idsession)->sum('cantidad');
    }

    // Limpiar carrito
    public static function clearCart($idsession = null)
    {
        $idsession = $idsession ?: session()->getId();
        return self::where('id_sesion', $idsession)->delete();
    }

}
