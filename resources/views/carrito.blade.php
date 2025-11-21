<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mi Carrito - TechZone</title>
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

        /* Navbar Styles */
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

        /* Hero Section */
        .cart-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 3rem 0;
            color: white;
            margin-bottom: 3rem;
        }

        .cart-hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .cart-hero p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Cart Container */
        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
            padding-bottom: 4rem;
        }

        /* Cart Item Card */
        .cart-item {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            animation: fadeInUp 0.5s ease-out;
        }

        .cart-item:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .product-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-info h5 {
            font-weight: 600;
            color: var(--tech-dark);
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--tech-blue);
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            width: 35px;
            height: 35px;
            border: 2px solid var(--tech-blue);
            background: white;
            color: var(--tech-blue);
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: var(--tech-blue);
            color: white;
        }

        .quantity-display {
            min-width: 50px;
            text-align: center;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--tech-dark);
        }

        .remove-btn {
            background: transparent;
            border: 2px solid #dc3545;
            color: #dc3545;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .remove-btn:hover {
            background: #dc3545;
            color: white;
        }

        /* Summary Card */
        .cart-summary {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            position: sticky;
            top: 20px;
        }

        .cart-summary h4 {
            font-weight: 700;
            color: var(--tech-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--tech-gray);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .summary-row.total {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-blue);
            padding-top: 1rem;
            border-top: 2px solid var(--tech-gray);
            margin-top: 1rem;
        }

        .btn-checkout {
            background: var(--tech-blue);
            color: white;
            border: none;
            padding: 1rem;
            font-weight: 600;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            margin-top: 1.5rem;
        }

        .btn-checkout:hover {
            background: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
            color: white;
        }

        .btn-continue {
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

        .btn-continue:hover {
            background: var(--tech-blue);
            color: white;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .empty-cart i {
            font-size: 5rem;
            color: #ccc;
            margin-bottom: 1.5rem;
        }

        .empty-cart h3 {
            font-weight: 600;
            color: var(--tech-dark);
            margin-bottom: 1rem;
        }

        .empty-cart p {
            color: #666;
            margin-bottom: 2rem;
        }

        /* Alerts */
        .alert {
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 2rem;
            animation: fadeInDown 0.5s ease-out;
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

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .cart-hero h1 {
                font-size: 2rem;
            }

            .product-image {
                width: 80px;
                height: 80px;
            }

            .cart-item {
                padding: 1rem;
            }

            .product-price {
                font-size: 1.1rem;
            }

            .cart-summary {
                position: static;
                margin-top: 2rem;
            }
        }

        /* Footer */
        .footer {
            background: var(--tech-dark);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 4rem;
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
                                   
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
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
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="cart-hero">
        <div class="container text-center">
            <h1><i class="fas fa-shopping-cart"></i> Mi Carrito</h1>
            <p>Revisa tus productos seleccionados</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container cart-container">
        <!-- Mensajes de alerta -->
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        @if(session('info'))
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> {{ session('info') }}
            </div>
        @endif

        @if($items->isEmpty())
            <!-- Carrito Vacío -->
            <div class="empty-cart">
                <i class="fas fa-shopping-cart"></i>
                <h3>Tu carrito está vacío</h3>
                <p>¡Agrega productos increíbles y empieza a comprar!</p>
                <a href="{{ route('inicio') }}" class="btn-checkout">
                    <i class="fas fa-arrow-left"></i> Ir a la tienda
                </a>
            </div>
        @else
            <div class="row">
                <!-- Lista de productos -->
                <div class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">
                            <strong>{{ $items->count() }}</strong> 
                            {{ $items->count() == 1 ? 'producto' : 'productos' }} en tu carrito
                        </h4>
                        <a href="{{ url('/') }}" class="btn-continue">
                            <i class="fas fa-plus"></i> Seguir comprando
                        </a>
                    </div>

                    @foreach($items as $item)
                        @php
                            // Para usuarios autenticados
                            if(Auth::check()) {
                                $producto = $item->producto;
                                $idProducto = $producto->id_producto;
                                $nombre = $producto->nombre_producto;
                                $precio = $producto->precio;
                                $imagen = $producto->imagen_producto;
                                $cantidad = $item->cantidad;
                                $subtotal = $item->subtotal;
                            } else {
                                // Para invitados (sesión)
                                $idProducto = $item['id'];
                                $nombre = $item['nombre'];
                                $precio = $item['precio'];
                                $imagen = $item['imagen'];
                                $cantidad = $item['cantidad'];
                                $subtotal = $precio * $cantidad;
                            }
                        @endphp

                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-3">
                                    <img src="{{ asset('img/' . $imagen) }}" 
                                         alt="{{ $nombre }}" 
                                         class="product-image">
                                </div>
                                
                                <div class="col-md-4 col-9">
                                    <div class="product-info">
                                        <h5>{{ $nombre }}</h5>
                                        <div class="product-price">
                                            L {{ number_format($precio, 2) }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6 mt-3 mt-md-0">
                                    <div class="quantity-controls">
                                        <form action="{{ route('carrito.actualizar', $idProducto) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="accion" value="decrementar">
                                            <button type="submit" class="quantity-btn" {{ $cantidad <= 1 ? 'disabled' : '' }}>
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </form>
                                        
                                        <span class="quantity-display">{{ $cantidad }}</span>
                                        
                                        <form action="{{ route('carrito.actualizar', $idProducto) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="accion" value="incrementar">
                                            <button type="submit" class="quantity-btn">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-2 col-4 mt-3 mt-md-0 text-end">
                                    <div class="product-price">
                                        L {{ number_format($subtotal, 2) }}
                                    </div>
                                </div>

                                <div class="col-md-1 col-2 mt-3 mt-md-0 text-end">
                                    <form action="{{ route('carrito.quitar', $idProducto) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="remove-btn" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Resumen del carrito -->
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h4><i class="fas fa-receipt"></i> Resumen del Pedido</h4>
                        
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
                            <span>Total:</span>
                            <span>L {{ number_format($total * 1.15, 2) }}</span>
                        </div>

                        @auth
                        
                         <a href="{{ route('checkout') }}" class="btn w-100"
                         style = "
                                        background: #0d6efd; 
                                        color: white; 
                                        padding: 12px; 
                                        border-radius: 10px; 
                                        font-weight: 600; 
                                        text-align: center;
                                        transition: 0.3s;
                                    ">
                                <i class="fas fa-credit-card me-2"></i> Proceder al Pago
                            </a>
                        
                        @endauth
                    
                        <div class="mt-3 text-center">
                            <small class="text-muted">
                                <i class="fas fa-lock"></i> Compra 100% segura
                            </small>
                        </div>

                        <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-truck text-primary me-2"></i>
                                <small>Envío gratis en compras mayores a L500</small>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-undo text-primary me-2"></i>
                                <small>Devoluciones gratis en 30 días</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-shield-alt text-primary me-2"></i>
                                <small>Garantía de satisfacción</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
</body>

</html>