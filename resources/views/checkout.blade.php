<!DOCTYPE html>
<html lang="es">

<head>
    <title>Checkout - TechZone</title>
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

        /* Navbar */
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

        /* Hero */
        .checkout-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2rem 0;
            color: white;
            margin-bottom: 3rem;
        }

        .checkout-hero h1 {
            font-size: 2rem;
            font-weight: 700;
        }

        /* Progress Steps */
        .checkout-steps {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .step {
            display: flex;
            align-items: center;
            color: #999;
        }

        .step.active {
            color: var(--tech-blue);
        }

        .step.completed {
            color: var(--tech-accent);
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-right: 0.5rem;
        }

        .step.active .step-circle {
            background: var(--tech-blue);
            color: white;
        }

        .step.completed .step-circle {
            background: var(--tech-accent);
            color: var(--tech-dark);
        }

        .step-divider {
            width: 60px;
            height: 2px;
            background: #e0e0e0;
            margin: 0 1rem;
        }

        /* Card Styles */
        .checkout-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            animation: fadeInUp 0.5s ease-out;
        }

        .checkout-card h4 {
            font-weight: 700;
            color: var(--tech-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--tech-gray);
        }

        /* Payment Methods */
        .payment-option {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .payment-option:hover {
            border-color: var(--tech-blue);
            background: rgba(0, 102, 204, 0.02);
        }

        .payment-option.selected {
            border-color: var(--tech-blue);
            background: rgba(0, 102, 204, 0.05);
        }

        .payment-option .checkmark {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 2px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .payment-option.selected .checkmark {
            background: var(--tech-blue);
            border-color: var(--tech-blue);
        }

        .payment-icon {
            font-size: 2rem;
            margin-right: 1rem;
        }

        .payment-details {
            display: none;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 2px solid var(--tech-gray);
            animation: fadeIn 0.3s ease;
        }

        .payment-option.selected .payment-details {
            display: block;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--tech-dark);
            font-size: 0.9rem;
        }

        .form-control {
            padding: 0.8rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--tech-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.1);
        }

        /* Order Summary */
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
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 1rem;
        }

        .order-item-info {
            flex: 1;
        }

        .order-item-name {
            font-weight: 600;
            color: var(--tech-dark);
            font-size: 0.95rem;
        }

        .order-item-price {
            color: var(--tech-blue);
            font-weight: 600;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
        }

        .summary-row.total {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--tech-blue);
            padding-top: 1rem;
            border-top: 2px solid var(--tech-gray);
            margin-top: 1rem;
        }

        /* Buttons */
        .btn-pay {
            background: var(--tech-blue);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .btn-pay:hover {
            background: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
            color: white;
        }

        .btn-back {
            background: white;
            color: var(--tech-blue);
            border: 2px solid var(--tech-blue);
            padding: 0.8rem 1.5rem;
            font-weight: 600;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background: var(--tech-blue);
            color: white;
        }

        /* Animations */
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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


        /* Credit Card Visual */
        .credit-card-preview {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            padding: 1.5rem;
            color: white;
            margin-bottom: 1.5rem;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-chip {
            width: 50px;
            height: 40px;
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .card-number {
            font-size: 1.5rem;
            letter-spacing: 3px;
            margin-bottom: 1rem;
            font-family: 'Courier New', monospace;
        }

        .card-details {
            display: flex;
            justify-content: space-between;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .checkout-steps {
                flex-direction: column;
                align-items: center;
            }

            .step-divider {
                transform: rotate(90deg);
                margin: 1rem 0;
            }

            .checkout-card {
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


    <!-- Hero -->
    <div class="checkout-hero">
        <div class="container text-center">
            <h1><i class="fas fa-lock"></i> Checkout Seguro</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container" style="max-width: 1200px; padding-bottom: 4rem;">
        
        <!-- Progress Steps -->
        <div class="checkout-steps d-none d-md-flex">
            <div class="step completed">
                <div class="step-circle"><i class="fas fa-check"></i></div>
                <span>Carrito</span>
            </div>
            <div class="step-divider"></div>
            <div class="step active">
                <div class="step-circle">2</div>
                <span>Pago</span>
            </div>
            <div class="step-divider"></div>
            <div class="step">
                <div class="step-circle">3</div>
                <span>Confirmación</span>
            </div>
        </div>

        <div class="row">
            <!-- Payment Section -->
            <div class="col-lg-7">
                <!-- Shipping Address -->
                <div class="checkout-card">
                    <h4><i class="fas fa-map-marker-alt"></i> Información de Envío</h4>
                    
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> 
                        <strong>Nota:</strong> Nos contactaremos contigo para coordinar la entrega de tu pedido.
                    </div>

                    <form id="checkout-form" action="{{ route('procesar.pago') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Nombre Completo *</label>
                                <input type="text" name="nombre_completo" class="form-control" 
                                       placeholder="Juan Pérez" required 
                                       value="{{ Auth::user()->name }}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Teléfono *</label>
                                <input type="tel" name="telefono" class="form-control" 
                                       placeholder="+504 9999-9999" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Dirección Completa *</label>
                            <textarea name="direccion" class="form-control" rows="3" 
                                      placeholder="Calle, número, colonia/barrio, ciudad" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Ciudad *</label>
                                <input type="text" name="ciudad" class="form-control" 
                                       placeholder="Tegucigalpa" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Código Postal</label>
                                <input type="text" name="codigo_postal" class="form-control" 
                                       placeholder="11101">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Notas del Pedido (Opcional)</label>
                            <textarea name="notas" class="form-control" rows="2" 
                                      placeholder="Instrucciones especiales de entrega..."></textarea>
                        </div>

                        <!-- Payment Methods -->
                        <div class="checkout-card" style="box-shadow: none; padding: 0; margin-top: 2rem;">
                            <h4><i class="fas fa-credit-card"></i> Método de Pago</h4>
                            
                            <!-- Credit Card Option -->
                            <div class="payment-option" onclick="selectPayment('card')" style="cursor:pointer;">
                                <input type="radio" name="metodo_pago" value="tarjeta" id="payment-card" style="display: none;" >
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-credit-card payment-icon text-primary"></i>
                                    <div>
                                        <strong>Tarjeta de Crédito/Débito</strong>
                                        <div class="text-muted small">Visa, MasterCard, American Express</div>
                                    </div>
                                    <div class="checkmark">
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                                
                                <div class="payment-details" id="card-details">
                                    <div class="credit-card-preview">
                                        <div>
                                            <div class="card-chip"></div>
                                            <div class="card-number" id="card-display">•••• •••• •••• ••••</div>
                                        </div>
                                        <div class="card-details">
                                            <div>
                                                <div class="small opacity-75">Titular</div>
                                                <div id="holder-display">NOMBRE DEL TITULAR</div>
                                            </div>
                                            <div>
                                                <div class="small opacity-75">Expira</div>
                                                <div id="expiry-display">MM/AA</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Número de Tarjeta</label>
                                        <input type="text" name="numero_tarjeta" class="form-control" 
                                               placeholder="1234 5678 9012 3456" 
                                               maxlength="19" 
                                               oninput="formatCardNumber(this); updateCardDisplay()"
                                               onclick="event.stopPropagation();">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Nombre del Titular</label>
                                        <input type="text" name="nombre_tarjeta" class="form-control" 
                                               placeholder="Como aparece en la tarjeta"
                                               oninput="updateCardDisplay()"
                                               onclick="event.stopPropagation();">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label">Fecha de Expiración</label>
                                            <input type="text" name="fecha_expiracion" class="form-control" 
                                                   placeholder="MM/AA" 
                                                   maxlength="5"
                                                   oninput="formatExpiry(this); updateCardDisplay()"
                                                   onclick="event.stopPropagation();">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label">CVV</label>
                                            <input type="text" name="cvv" class="form-control" 
                                                   placeholder="123" 
                                                   maxlength="4"
                                                   onclick="event.stopPropagation();">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PayPal Option -->
                            <div class="payment-option" onclick="selectPayment('paypal')" style="cursor:pointer;">
                                <input type="radio" name="metodo_pago" value="paypal" id="payment-paypal" style="display: none;">
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-paypal payment-icon" style="color: #00457C;"></i>
                                    <div>
                                        <strong>PayPal</strong>
                                        <div class="text-muted small">Pago seguro con tu cuenta PayPal</div>
                                    </div>
                                    <div class="checkmark">
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                                
                                <div class="payment-details" id="paypal-details">
                                    <div class="alert alert-info">
                                        <i class="fab fa-paypal"></i> 
                                        Serás redirigido a PayPal para completar tu pago de forma segura.
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email de PayPal</label>
                                        <input type="email" name="paypal_email" class="form-control" 
                                               placeholder="tu@email.com"
                                               onclick="event.stopPropagation();">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ route('carrito.ver') }}" class="btn-back">
                                <i class="fas fa-arrow-left"></i> Volver al Carrito
                            </a>
                        
                                <form action="{{ route('procesar.pago') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn w-100"
                                        style="
                                            background: #0d6efd; 
                                            color: white; 
                                            padding: 12px; 
                                            border-radius: 10px; 
                                            font-weight: 600; 
                                            text-align: center;
                                            transition: 0.3s;
                                        ">
                                        <i class="fas fa-lock"></i> Realizar Pedido
                                    </button>
                                </form>
                                
                        </div>
                    </form>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="checkout-card" style="position: sticky; top: 20px;">
                    <h4><i class="fas fa-shopping-bag"></i> Resumen del Pedido</h4>
                    
                    <div style="max-height: 400px; overflow-y: auto; margin-bottom: 1rem;">
                        @foreach($items as $item)
                            @php
                                if(Auth::check()) {
                                    $producto = $item->producto;
                                    $nombre = $producto->nombre_producto;
                                    $precio = $producto->precio;
                                    $imagen = $producto->imagen_producto;
                                    $cantidad = $item->cantidad;
                                    $subtotal = $item->subtotal;
                                } else {
                                    $nombre = $item['nombre'];
                                    $precio = $item['precio'];
                                    $imagen = $item['imagen'];
                                    $cantidad = $item['cantidad'];
                                    $subtotal = $precio * $cantidad;
                                }
                            @endphp

                            <div class="order-item">
                                <img src="{{ asset('img/' . $imagen) }}" alt="{{ $nombre }}">
                                <div class="order-item-info">
                                    <div class="order-item-name">{{ $nombre }}</div>
                                    <div class="text-muted small">Cantidad: {{ $cantidad }}</div>
                                </div>
                                <div class="order-item-price">
                                    L {{ number_format($subtotal, 2) }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="summary-row">
                        <span>Subtotal:</span>
                        <span>L {{ number_format($total, 2) }}</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Envío:</span>
                        <span class="text-success">Gratis</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Impuestos (15%):</span>
                        <span>L {{ number_format($total * 0.15, 2) }}</span>
                    </div>

                    <div class="summary-row total">
                        <span>Total a Pagar:</span>
                        <span>L {{ number_format($total * 1.15, 2) }}</span>
                    </div>

                    <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-shield-alt text-success me-2"></i>
                            <small>Pago 100% seguro</small>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-truck text-primary me-2"></i>
                            <small>Envío gratuito</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-undo text-primary me-2"></i>
                            <small>Devolución en 30 días</small>
                        </div>
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
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Devoluciones</a></li>
                        <li><a href="#">Garantía</a></li>
                        <li><a href="#">Contacto</a></li>
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
    
    <script>

    function selectPayment(method) {
    const cardRadio = document.getElementById('payment-card');
    const paypalRadio = document.getElementById('payment-paypal');

    const cardDetails = document.getElementById('card-details');
    const paypalDetails = document.getElementById('paypal-details');

    // Ocultar ambos inicialmente
    cardDetails.style.display = "none";
    paypalDetails.style.display = "none";

    // Quitar selección visual a todos
    document.querySelectorAll('.payment-option').forEach(option => {
        option.classList.remove('selected');
    });

    if (method === 'card') {
        cardRadio.checked = true;
        cardDetails.style.display = "block";

        // activar visual
        document.querySelector('.payment-option[onclick="selectPayment(\'card\')"]').classList.add('selected');

    } else if (method === 'paypal') {
        paypalRadio.checked = true;
        paypalDetails.style.display = "block";

        document.querySelector('.payment-option[onclick="selectPayment(\'paypal\')"]').classList.add('selected');
    }
}

        // Format card number
        function formatCardNumber(input) {
            let value = input.value.replace(/\s/g, '');
            let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
            input.value = formattedValue;
        }

        // Format expiry date
        function formatExpiry(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.slice(0, 2) + '/' + value.slice(2, 4);
            }
            input.value = value;
        }

        // Update card preview
        function updateCardDisplay() {
            const cardNumber = document.querySelector('input[name="numero_tarjeta"]')?.value || '•••• •••• •••• ••••';
            const cardHolder = document.querySelector('input[name="nombre_tarjeta"]')?.value || 'NOMBRE DEL TITULAR';
            const expiry = document.querySelector('input[name="fecha_expiracion"]')?.value || 'MM/AA';
            
            document.getElementById('card-display').textContent = cardNumber || '•••• •••• •••• ••••';
            document.getElementById('holder-display').textContent = cardHolder.toUpperCase();
            document.getElementById('expiry-display').textContent = expiry;
        }

        // Form validation
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            const selectedPayment = document.querySelector('input[name="metodo_pago"]:checked');
            
            if (!selectedPayment) {
                e.preventDefault();
                alert('Por favor selecciona un método de pago');
                return false;
            }

            // Additional validation for credit card
            if (selectedPayment.value === 'tarjeta') {
                const cardNumber = document.querySelector('input[name="numero_tarjeta"]').value;
                const cardHolder = document.querySelector('input[name="nombre_tarjeta"]').value;
                const expiry = document.querySelector('input[name="fecha_expiracion"]').value;
                const cvv = document.querySelector('input[name="cvv"]').value;

                if (!cardNumber || !cardHolder || !expiry || !cvv) {
                    e.preventDefault();
                    alert('Por favor completa todos los datos de la tarjeta');
                    return false;
                }
            }
        });

        
    </script>
</body>

</html>