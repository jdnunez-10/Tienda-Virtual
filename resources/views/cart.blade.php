<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras - TechZone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ asset('img/imagen fondo.jpg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/imagen fondo.jpg') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --tech-blue: #0066CC;
            --tech-dark: #1a1a1a;
            --tech-gray: #f8f9fa;
            --tech-accent: #00ff88;
            --tech-orange: #ff6b35;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--tech-blue) !important;
        }

        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--tech-blue) !important;
        }

        .cart-item {
            transition: background-color 0.2s ease;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .cart-item:hover {
            background-color: #f8f9fa;
        }

        .quantity-btn {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .quantity-input {
            max-width: 80px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        .btn-checkout {
            background: var(--tech-blue);
            color: white;
            font-weight: 600;
            padding: 15px 30px;
            border-radius: 10px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-checkout:hover {
            background: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
            color: white;
        }

        .cart-summary {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .cart-empty {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .remove-item-btn {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>



<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">
                <i class="fas fa-shopping-cart me-2" style="color: var(--tech-blue);"></i>
                Mi Carrito de Compras
            </h2>

            @if($cartItems->count() > 0)
                <div class="row">
                    <!-- Items del carrito -->
                    <div class="col-lg-8">
                        <div class="card shadow-sm" style="border-radius: 15px; border: none;">
                            <div class="card-body p-4">
                                @foreach($cartItems as $item)
                                <div class="cart-item row align-items-center py-3" data-item-id="{{ $item->id }}" style="border-bottom: 1px solid #eee;">
                                    <div class="col-md-2">
                                        @if($item->imagen_producto)
                                            <img src="{{ $item->imagen_producto }}" alt="{{ $item->nombre_producto }}" 
                                                 class="img-fluid rounded" style="max-height: 80px; object-fit: contain;">
                                        @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                                 style="height: 80px; width: 80px;">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="mb-1" style="color: var(--tech-dark);">{{ $item->nombre_producto }}</h6>
                                        <small class="text-muted">${{ number_format($item->precio, 2) }} c/u</small>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group input-group-sm">
                                            <button class="btn btn-outline-secondary quantity-btn" type="button" data-action="decrease">-</button>
                                            <input type="number" class="form-control quantity-input" 
                                                   value="{{ $item->cantidad }}" min="1" max="99">
                                            <button class="btn btn-outline-secondary quantity-btn" type="button" data-action="increase">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <strong class="item-total" style="color: var(--tech-blue);">${{ number_format($item->total, 2) }}</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-outline-danger remove-item-btn" 
                                                data-item-id="{{ $item->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach

                                <div class="mt-3">
                                    <button class="btn btn-outline-secondary" id="clear-cart-btn">
                                        <i class="fas fa-trash me-2"></i>
                                        Vaciar Carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resumen del carrito -->
                    <div class="col-lg-4">
                        <div class="cart-summary p-4">
                            <h5 style="color: var(--tech-dark); font-weight: 600;">Resumen de Compra</h5>
                            <hr>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal ({{ $cartCount }} items):</span>
                                <span>${{ number_format($cartTotal, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Envío:</span>
                                <span style="color: var(--tech-accent); font-weight: 600;">Gratis</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3">
                                <strong style="color: var(--tech-dark);">Total:</strong>
                                <strong id="cart-total" style="color: var(--tech-blue);">${{ number_format($cartTotal, 2) }}</strong>
                            </div>
                            <div class="d-grid mb-3">
                                <a href="{{ route('cart.checkout') }}" class="btn btn-checkout">
                                    <i class="fas fa-credit-card me-2"></i>
                                    Proceder al Pago
                                </a>
                            </div>
                            <div class="d-grid">
                                <a href="{{ route('inicio') }}" class="btn btn-outline-secondary" style="border-radius: 10px;">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Seguir Comprando
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="cart-empty">
                    <i class="fas fa-shopping-cart text-muted mb-4" style="font-size: 4rem;"></i>
                    <h3 style="color: var(--tech-dark);">Tu carrito está vacío</h3>
                    <p class="text-muted mb-4">Agrega algunos productos y regresa aquí para finalizar tu compra</p>
                    <a href="{{ route('inicio') }}" class="btn btn-checkout">
                        <i class="fas fa-arrow-left me-2"></i>
                        Ir de Compras
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>
</html>