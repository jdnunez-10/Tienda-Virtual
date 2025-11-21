<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    
    public function descargarFactura($pedido_id)
{
    // Buscar el pedido y verificar que pertenece al usuario
    $pedido = Pedido::with(['detalles.producto', 'usuario'])
                    ->where('id', $pedido_id)
                    ->where('user_id', Auth::id())
                    ->firstOrFail();

    // Generar el PDF
    $pdf = Pdf::loadView('factura', compact('pedido'))
              ->setPaper('letter', 'portrait')
              ->setOption('margin-top', 10)
              ->setOption('margin-right', 10)
              ->setOption('margin-bottom', 10)
              ->setOption('margin-left', 10);

    // Nombre del archivo
    $filename = 'Factura-' . $pedido->numero_pedido . '.pdf';

    // Descargar el PDF
    return $pdf->download($filename);
}

/**
 * Ver factura en el navegador (opcional)
 */
public function verFactura($pedido_id)
{
    // Buscar el pedido
    $pedido = Pedido::with(['detalles.producto', 'usuario'])
                    ->where('id', $pedido_id)
                    ->where('user_id', Auth::id())
                    ->firstOrFail();

    // Generar el PDF
    $pdf = Pdf::loadView('factura', compact('pedido'))
              ->setPaper('letter', 'portrait');

    // Mostrar en el navegador
    return $pdf->stream('Factura-' . $pedido->numero_pedido . '.pdf');
}
}
