<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{

    use HasFactory;
   
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    protected $fillable = [
        'id_producto',
        'nombre_producto',
        'imagen_producto',
        'descripcion_',
        'precio',
        'cantidad',
        'total',
        'destacado'
    ];

    // Relación con categorías (opcional)
    //public function categoria()
    //{
      //  return $this->belongsTo(Categoria::class, 'categoria_id');
    //}

    // app/Models/Producto.php
            public function categoria()
            {
                return $this->belongsTo(Categoria::class);
            }


    public function ofertas()
{
    return $this->hasMany(Oferta::class, 'producto_id');
}
}


