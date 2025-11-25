<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura {{ $pedido->numero_pedido }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 30px;
            border-bottom: 3px solid #0066CC;
            padding-bottom: 20px;
        }

        .header-left {
            display: table-cell;
            width: 60%;
            vertical-align: top;
        }

        .header-right {
            display: table-cell;
            width: 40%;
            text-align: right;
            vertical-align: top;
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #0066CC;
            margin-bottom: 10px;
        }

        .company-info {
            font-size: 11px;
            color: #666;
            line-height: 1.8;
        }

        .invoice-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .invoice-number {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .invoice-date {
            font-size: 11px;
            color: #999;
        }

        /* Info Boxes */
        .info-section {
            display: table;
            width: 100%;
            margin-bottom: 30px;
        }

        .info-box {
            display: table-cell;
            width: 48%;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .info-box:first-child {
            margin-right: 4%;
        }

        .info-box h3 {
            font-size: 13px;
            font-weight: bold;
            color: #0066CC;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .info-box p {
            margin: 5px 0;
            font-size: 11px;
        }

        .info-box strong {
            color: #333;
        }

        /* Table */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .items-table thead {
            background: #0066CC;
            color: white;
        }

        .items-table th {
            padding: 12px 10px;
            text-align: left;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .items-table th:last-child,
        .items-table td:last-child {
            text-align: right;
        }

        .items-table tbody tr {
            border-bottom: 1px solid #e0e0e0;
        }

        .items-table tbody tr:last-child {
            border-bottom: 2px solid #0066CC;
        }

        .items-table td {
            padding: 12px 10px;
            font-size: 11px;
        }

        .item-name {
            font-weight: bold;
            color: #333;
        }

        .item-description {
            color: #666;
            font-size: 10px;
        }

        /* Totals */
        .totals-section {
            float: right;
            width: 300px;
            margin-top: 20px;
        }

        .totals-row {
            display: table;
            width: 100%;
            padding: 8px 0;
        }

        .totals-label {
            display: table-cell;
            width: 60%;
            font-size: 12px;
            color: #666;
        }

        .totals-value {
            display: table-cell;
            width: 40%;
            text-align: right;
            font-size: 12px;
            font-weight: bold;
        }

        .totals-row.total {
            border-top: 2px solid #0066CC;
            padding-top: 12px;
            margin-top: 10px;
        }

        .totals-row.total .totals-label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .totals-row.total .totals-value {
            font-size: 18px;
            color: #0066CC;
        }

        /* Payment Info */
        .payment-info {
            clear: both;
            margin-top: 40px;
            padding: 15px;
            background: #f8f9fa;
            border-left: 4px solid #0066CC;
            border-radius: 3px;
        }

        .payment-info h3 {
            font-size: 13px;
            font-weight: bold;
            color: #0066CC;
            margin-bottom: 10px;
        }

        .payment-info p {
            margin: 5px 0;
            font-size: 11px;
        }

        .payment-badge {
            display: inline-block;
            padding: 5px 12px;
            background: #fff3cd;
            color: #856404;
            border-radius: 15px;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .payment-badge.paid {
            background: #d4edda;
            color: #155724;
        }

        /* Footer */
        .footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 2px solid #e0e0e0;
            text-align: center;
            font-size: 10px;
            color: #999;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer strong {
            color: #666;
        }

        /* Notes */
        .notes {
            margin-top: 30px;
            padding: 15px;
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            border-radius: 3px;
        }

        .notes h4 {
            font-size: 12px;
            font-weight: bold;
            color: #856404;
            margin-bottom: 8px;
        }

        .notes p {
            font-size: 11px;
            color: #856404;
            margin: 0;
        }

        /* Page break */
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <div class="logo"> TechZone</div>
                <div class="company-info">
                    <strong>TechZone Honduras</strong><br>
                    Tegucigalpa, Francisco Morazán<br>
                    Teléfono: +504 2222-2222<br>
                    Email: ventas@techzone.hn<br>
                    RTN: 08019999999999
                </div>
            </div>
            <div class="header-right">
                <div class="invoice-title">FACTURA</div>
                <div class="invoice-number">
                    <strong>No. {{ $pedido->numero_pedido }}</strong>
                </div>
                <div class="invoice-date">
                    Fecha: {{ $pedido->created_at->format('d/m/Y') }}<br>
                    Hora: {{ $pedido->created_at->format('H:i:s') }}
                </div>
            </div>
        </div>

        <!-- Customer and Shipping Info -->
        <div class="info-section">
            <div class="info-box">
                <h3>Facturar a:</h3>
                <p><strong>{{ $pedido->nombre_completo }}</strong></p>
                <p>{{ $pedido->usuario->email }}</p>
                <p>{{ $pedido->telefono }}</p>
            </div>
            <div class="info-box">
                <h3>Enviar a:</h3>
                <p><strong>{{ $pedido->nombre_completo }}</strong></p>
                <p>{{ $pedido->direccion }}</p>
                <p>{{ $pedido->ciudad }}
                    @if($pedido->codigo_postal)
                        , {{ $pedido->codigo_postal }}
                    @endif
                </p>
                <p>Honduras</p>
            </div>
        </div>

        <!-- Items Table -->
        <table class="items-table">
            <thead>
                <tr>
                    <th style="width: 10%;">Cant.</th>
                    <th style="width: 50%;">Descripción</th>
                    <th style="width: 20%;">Precio Unit.</th>
                    <th style="width: 20%;">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedido->detalles as $detalle)
                <tr>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>
                        <div class="item-name">{{ $detalle->producto->nombre_producto }}</div>
                        @if($detalle->producto->descripcion_)
                        <div class="item-description">{{ Str::limit($detalle->producto->descripcion_, 100) }}</div>
                        @endif
                    </td>
                    <td>$ {{ number_format($detalle->precio_unitario, 2) }}</td>
                    <td>$ {{ number_format($detalle->subtotal, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Totals -->
        <div class="totals-section">
            <div class="totals-row">
                <div class="totals-label">Subtotal:</div>
                <div class="totals-value">$ {{ number_format($pedido->subtotal, 2) }}</div>
            </div>
            <div class="totals-row">
                <div class="totals-label">Envío:</div>
                <div class="totals-value" style="color: #28a745;">GRATIS</div>
            </div>
            <div class="totals-row">
                <div class="totals-label">Impuestos (15%):</div>
                <div class="totals-value">$ {{ number_format($pedido->impuestos, 2) }}</div>
            </div>
            <div class="totals-row total">
                <div class="totals-label">TOTAL:</div>
                <div class="totals-value">$ {{ number_format($pedido->total, 2) }}</div>
            </div>
        </div>

        <!-- Payment Info -->
        <div class="payment-info">
            <h3>Información de Pago</h3>
            <p>
                <strong>Método de Pago:</strong> 
                @if($pedido->metodo_pago === 'tarjeta')
                    Tarjeta de Crédito/Débito 
                    @if($pedido->ultimos_4_digitos)
                        terminada en ****{{ $pedido->ultimos_4_digitos }}
                    @endif
                @elseif($pedido->metodo_pago === 'paypal')
                    PayPal ({{ $pedido->paypal_email }})
                @endif
            </p>
            <p>
                <strong>Estado del Pago:</strong> 
                <span class="payment-badge {{ $pedido->estado === 'entregado' ? 'paid' : '' }}">
                    {{ $pedido->estado_formateado }}
                </span>
            </p>
        </div>

        <!-- Notes if any -->
        @if($pedido->notas)
        <div class="notes">
            <h4>Notas del Pedido:</h4>
            <p>{{ $pedido->notas }}</p>
        </div>
        @endif

        <!-- Footer -->
        <div class="footer">
            <p><strong>¡Gracias por tu compra!</strong></p>
            <p>Este documento es una factura válida emitida por TechZone Honduras</p>
            <p>Si tienes alguna pregunta sobre esta factura, contáctanos a ventas@techzone.hn</p>
            <p style="margin-top: 15px; font-size: 9px;">
                Factura generada electrónicamente el {{ now()->format('d/m/Y H:i:s') }}
            </p>
        </div>
    </div>
</body>
</html>