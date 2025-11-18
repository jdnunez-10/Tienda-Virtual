<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrito extends Model
{
   

    use HasFactory;

    protected $fillable = ['user_id', 'producto_id', 'cantidad', 'subtotal'];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_producto');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
