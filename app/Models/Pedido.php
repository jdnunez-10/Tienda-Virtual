<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numero_pedido',
        'nombre_completo',
        'telefono',
        'direccion',
        'ciudad',
        'codigo_postal',
        'notas',
        'metodo_pago',
        'ultimos_4_digitos',
        'nombre_titular',
        'paypal_email',
        'subtotal',
        'impuestos',
        'total',
        'estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detalles()
    {
        return $this->hasMany(DetallePedido::class);
    }

    // Obtener el estado con formato
    public function getEstadoFormateadoAttribute()
    {
        $estados = [
            'pendiente' => 'Pendiente',
            'procesando' => 'Procesando',
            'enviado' => 'Enviado',
            'entregado' => 'Entregado',
            'cancelado' => 'Cancelado',
        ];

        return $estados[$this->estado] ?? $this->estado;
    }

    // Obtener color del badge según el estado
    public function getEstadoColorAttribute()
    {
        $colores = [
            'pendiente' => 'warning',
            'procesando' => 'info',
            'enviado' => 'primary',
            'entregado' => 'success',
            'cancelado' => 'danger',
        ];

        return $colores[$this->estado] ?? 'secondary';
    }
}

