<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oferta extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'producto_id',
        'descuento',
        'precio_oferta',
        'fecha_inicio',
        'fecha_fin',
        'descripcion'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

}
