<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pedido Confirmado - TechZone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            background-color: #fafafa;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--tech-blue) !important;
        }

        .success-hero {
            background: linear-gradient(135deg, #00ff88 0%, #00cc66 100%);
            padding: 3rem 0;
            color: var(--tech-dark);
            margin-bottom: 3rem;
            text-align: center;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 3rem;
            color: var(--tech-accent);
            animation: scaleIn 0.5s ease-out;
        }

        .success-hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .confirmation-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            animation: fadeInUp 0.6s ease-out;
        }

        .confirmation-card h4 {
            font-weight: 700;
            color: var(--tech-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--tech-gray);
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 0.8rem 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #666;
        }

        .info-value {
            color: var(--tech-dark);
            text-align: right;
        }

        .order-number {
            background: var(--tech-blue);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 2rem;
        }

        .order-number h3 {
            font-size: 1.5rem;
            margin: 0;
            font-weight: 700;
        }

        .order-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 1.5rem;
        }

        .order-item-info {
            flex: 1;
        }

        .order-item-name {
            font-weight: 600;
            color: var(--tech-dark);
            margin-bottom: 0.25rem;
        }

        .order-item-price {
            color: var(--tech-blue);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
        }

        .summary-row.total {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-blue);
            padding-top: 1rem;
            border-top: 2px solid var(--tech-gray);
            margin-top: 1rem;
        }

        .btn-primary {
            background: var(--tech-blue);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            background: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
            color: white;
        }

        .btn-secondary {
            background: white;
            color: var(--tech-blue);
            border: 2px solid var(--tech-blue);
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: var(--tech-blue);
            color: white;
        }

        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-block;
        }

        .status-badge.pending {
            background: #fff3cd;
            color: #856404;
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline-item {
            position: relative;
            padding-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1.5rem;
            top: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--tech-blue);
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: -1.45rem;
            top: 12px;
            width: 2px;
            height: calc(100% - 12px);
            background: #e0e0e0;
        }

        .timeline-item:last-child::after {
            display: none;
        }

        .timeline-item.completed::before {
            background: var(--tech-accent);
        }

         
        /* Footer */
        .footer {
            background: var(--tech-dark);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer h5 {
            color: var(--tech-accent);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--tech-accent);
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .success-hero h1 {
                font-size: 2rem;
            }

            .confirmation-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>

 <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2">
        <div class="container">
            <div class="d-flex justify-content-between w-100">
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i>
                    <a class="text-light text-decoration-none me-3" href="mailto:info@techzone.com">info@techzone.com</a>
                    <i class="fas fa-phone me-2"></i>
                    <a class="text-light text-decoration-none" href="tel:+504-1234-5678">+504 1234-5678</a>
                </div>
                <div class="d-none d-lg-block">
                    <a class="text-light me-3" href="#"><i class="fab fa-facebook"></i></a>
                    <a class="text-light me-3" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="text-light me-3" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="text-light" href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </nav>

   <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-microchip me-2"></i>TechZone</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('productos') }}">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('categorias') }}" role="button">
                            Categorías
                        </a>
                     
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>

                 <!-- Usuario -->
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ route('inicio') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i> Mi Perfil</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    <i class="fas fa-user-plus"></i> Registrarse
                                </a>
                            </li>
                        @endauth
                    </ul>
            </div>
        </div>
    </nav>

    <!-- Success Hero -->
    <div class="success-hero">
        <div class="container">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h1>¡Pedido Realizado con Éxito!</h1>
            <p class="mb-0">Gracias por tu compra. Nos pondremos en contacto contigo pronto.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container" style="max-width: 1000px; padding-bottom: 4rem;">
        
        <!-- Order Number -->
        <div class="order-number">
            <small style="opacity: 0.9;">Número de Pedido</small>
            <h3>{{ $pedido->numero_pedido }}</h3>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- Order Details -->
                <div class="confirmation-card">
                    <h4><i class="fas fa-shopping-bag"></i> Detalles del Pedido</h4>
                    
                    @foreach($pedido->detalles as $detalle)
                        <div class="order-item">
                            <img src="{{ asset('img/' . $detalle->producto->imagen_producto) }}" 
                                 alt="{{ $detalle->producto->nombre_producto }}">
                            <div class="order-item-info">
                                <div class="order-item-name">
                                    {{ $detalle->producto->nombre_producto }}
                                </div>
                                <div class="text-muted small">
                                    Cantidad: {{ $detalle->cantidad }} x L {{ number_format($detalle->precio_unitario, 2) }}
                                </div>
                            </div>
                            <div class="order-item-price">
                                L {{ number_format($detalle->subtotal, 2) }}
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Shipping Information -->
                <div class="confirmation-card">
                    <h4><i class="fas fa-map-marker-alt"></i> Información de Envío</h4>
                    
                    <div class="info-row">
                        <span class="info-label">Nombre:</span>
                        <span class="info-value">{{ $pedido->nombre_completo }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Teléfono:</span>
                        <span class="info-value">{{ $pedido->telefono }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Dirección:</span>
                        <span class="info-value">{{ $pedido->direccion }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Ciudad:</span>
                        <span class="info-value">{{ $pedido->ciudad }}</span>
                    </div>
                    @if($pedido->codigo_postal)
                    <div class="info-row">
                        <span class="info-label">Código Postal:</span>
                        <span class="info-value">{{ $pedido->codigo_postal }}</span>
                    </div>
                    @endif
                    @if($pedido->notas)
                    <div class="info-row">
                        <span class="info-label">Notas:</span>
                        <span class="info-value">{{ $pedido->notas }}</span>
                    </div>
                    @endif
                </div>

                <!-- Payment Information -->
                <div class="confirmation-card">
                    <h4><i class="fas fa-credit-card"></i> Información de Pago</h4>
                    
                    <div class="info-row">
                        <span class="info-label">Método de Pago:</span>
                        <span class="info-value">
                            @if($pedido->metodo_pago === 'tarjeta')
                                <i class="fas fa-credit-card"></i> Tarjeta 
                                @if($pedido->ultimos_4_digitos)
                                    ****{{ $pedido->ultimos_4_digitos }}
                                @endif
                            @else
                                <i class="fab fa-paypal"></i> PayPal
                            @endif
                        </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Estado:</span>
                        <span class="info-value">
                            <span class="status-badge {{ $pedido->estado_color }}">
                                {{ $pedido->estado_formateado }}
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Order Summary -->
                <div class="confirmation-card" style="position: sticky; top: 20px;">
                    <h4><i class="fas fa-receipt"></i> Resumen</h4>
                    
                    <div class="summary-row">
                        <span>Subtotal:</span>
                        <span>L {{ number_format($pedido->subtotal, 2) }}</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Envío:</span>
                        <span class="text-success">Gratis</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Impuestos:</span>
                        <span>L {{ number_format($pedido->impuestos, 2) }}</span>
                    </div>

                    <div class="summary-row total">
                        <span>Total Pagado:</span>
                        <span>L {{ number_format($pedido->total, 2) }}</span>
                    </div>

                    <div class="alert alert-info mt-3">
                        <i class="fas fa-info-circle"></i>
                        <strong>Próximos pasos:</strong>
                        <p class="mb-0 mt-2 small">
                            Nos pondremos en contacto contigo en las próximas 24 horas para coordinar la entrega de tu pedido.
                        </p>
                    </div>

                    <!-- Timeline -->
                    <div class="mt-4">
                        <h6 class="mb-3"><strong>Estado del Pedido</strong></h6>
                        <div class="timeline">
                            <div class="timeline-item completed">
                                <strong>Pedido Recibido</strong>
                                <div class="text-muted small">{{ $pedido->created_at->format('d/m/Y H:i') }}</div>
                            </div>
                            <div class="timeline-item">
                                <strong>En Proceso</strong>
                                <div class="text-muted small">Pronto</div>
                            </div>
                            <div class="timeline-item">
                                <strong>Enviado</strong>
                                <div class="text-muted small">Te notificaremos</div>
                            </div>
                            <div class="timeline-item">
                                <strong>Entregado</strong>
                                <div class="text-muted small">Próximamente</div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                <div class="d-grid gap-2 mt-3">
                    <a href="{{ route('inicio') }}" class="btn-primary text-center">
                        <i class="fas fa-home"></i> Volver al Inicio
                    </a>
                    <a href="{{ route('pedido.factura.descargar', ['pedido_id' => $pedido->id]) }}" class="btn-secondary text-center">
                        <i class="fas fa-file-pdf"></i> Descargar Factura
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>

    


      <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="fas fa-microchip me-2"></i>TechZone</h5>
                    <p class="col-lg mb-4">Tu tienda de confianza para productos tecnológicos de última generación.</p>
                    <div class="d-flex">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 footer-links">
                    <h5>Productos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Gaming</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 footer-links">
                    <h5>Soporte</h5>
                  <ul class="list-unstyled">
                        <li><a href="{{ route('faq') }}">Preguntas frecuentes</a></li>
                        <li><a href="{{ route('devoluciones') }}">Devoluciones</a></li>
                        <li><a href="{{route('garantia')}}">Garantía</a></li>
                        <li><a href="{{ route('sobre-nosotros') }}">Sobre nosotros</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>Tegucigalpa, Honduras</li>
                        <li><i class="fas fa-phone me-2"></i>+504 1234-5678</li>
                        <li><i class="fas fa-envelope me-2"></i>info@techzone.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" style="border-color: #333;">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="col-lg mb-4">&copy; 2024 TechZone. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>