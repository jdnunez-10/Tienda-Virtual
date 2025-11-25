<!DOCTYPE html>
<html lang="es">

<head>
    <title>Productos - TechZone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    
    <style>
        :root {
            --tech-blue: #0066CC;
            --tech-dark: #1a1a1a;
            --tech-gray: #f8f9fa;
            --tech-accent: #00ff88;
            --tech-orange: #ff6b35;
            --tech-red: #e74c3c;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #fafafa;
            line-height: 1.6;
        }

        /* Navigation */
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

        /* Breadcrumb */
        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item a {
            color: var(--tech-blue);
            text-decoration: none;
        }

        /* Page Header */
        .page-header {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }

        .page-header h1 {
            font-weight: 700;
            color: var(--tech-dark);
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: #666;
            margin-bottom: 0;
        }

        /* Featured Offers Section */
        .featured-offers {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .section-title {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--tech-dark);
        }

        .offer-banner {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            padding: 3rem 2rem;
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .offer-banner::before {
            content: '🔥';
            position: absolute;
            font-size: 10rem;
            opacity: 0.1;
            top: 50%;
            right: 2rem;
            transform: translateY(-50%);
        }

        .banner-content {
            position: relative;
            z-index: 2;
        }

        .offer-badge {
            display: inline-block;
            background: var(--tech-red);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .countdown-timer {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }

        .countdown-item {
            text-align: center;
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }

        .countdown-label {
            font-size: 0.875rem;
            opacity: 0.8;
        }

        /* Products Grid - Same style as other sections */
        .products-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .products-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .filter-tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-tab {
            background: transparent;
            border: 2px solid #e1e5e9;
            color: #666;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .filter-tab.active,
        .filter-tab:hover {
            background: var(--tech-blue);
            border-color: var(--tech-blue);
            color: white;
        }

        /* Product Cards - Same style as products page */
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .product-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-discount {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--tech-red);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.875rem;
            z-index: 2;
        }

        .wishlist-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .wishlist-btn:hover {
            background: var(--tech-accent);
            color: white;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-category {
            font-size: 0.875rem;
            color: var(--tech-blue);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .product-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--tech-dark);
        }

        .product-description {
            color: #666;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .current-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-red);
        }

        .original-price {
            font-size: 1rem;
            color: #999;
            text-decoration: line-through;
        }

        .savings {
            background: var(--tech-accent);
            color: var(--tech-dark);
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .offer-timer {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 0.5rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            text-align: center;
            font-size: 0.75rem;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-add-cart {
            background: var(--tech-blue);
            border: none;
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
            flex: 1;
        }

        .btn-add-cart:hover {
            background: #0052a3;
            transform: translateY(-1px);
            color: white;
        }

        .btn-quick-view {
            background: transparent;
            border: 2px solid var(--tech-blue);
            color: var(--tech-blue);
            padding: 0.75rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-quick-view:hover {
            background: var(--tech-blue);
            color: white;
        }

        /* Special Offers Cards */
        .special-offers {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .offer-card {
            background: var(--tech-gray);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .offer-icon {
            font-size: 3rem;
            color: var(--tech-blue);
            margin-bottom: 1rem;
        }

        .offer-card.flash {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .offer-card.flash .offer-icon {
            color: white;
        }

        .offer-card.weekend {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .offer-card.weekend .offer-icon {
            color: white;
        }

        .offer-card.clearance {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            color: var(--tech-dark);
        }

        /* Newsletter Section - Same style as other sections */
        .newsletter-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .countdown-number {
                font-size: 1.5rem;
            }
            
            .filter-tabs {
                justify-content: flex-start;
                overflow-x: auto;
                padding-bottom: 0.5rem;
            }
            
            .filter-tab {
                white-space: nowrap;
                flex-shrink: 0;
            }
            
            .products-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
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

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        
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
                    <a class="text-light me-3" href="https://www.instagram.com/techzone0704/"><i class="fab fa-instagram"></i></a>
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
                
                      <ul class="navbar-nav d-flex align-items-center ms-auto">
                        <!-- Botón de búsqueda -->
                        <li class="nav-item me-3">
                            <button class="btn btn-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="fas fa-search"></i>
                            </button>
                        </li>

                        <!-- Carrito -->
                        <li class="nav-item me-3 position-relative">
                            <a href="{{ route('carrito.ver') }}" class="btn btn-link">
                                <i class="fas fa-shopping-cart"></i>
                                @php
                                    $cantidadCarrito = Auth::check()
                                        ? \App\Models\Carrito::where('user_id', Auth::id())->sum('cantidad')
                                        : collect(session('carrito', []))->sum('cantidad');
                                @endphp
                                @if($cantidadCarrito > 0)
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{ $cantidadCarrito }}
                                    </span>
                                @endif
                            </a>
                        </li>

                        <!-- Usuario -->
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
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
</div>
            </div>
        </div>
    </nav>

   <!-- Breadcrumb -->
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ofertas</li>
            </ol>
        </nav>
    </div>

    <!-- Page Header -->
    <div class="container">
        <div class="page-header fade-in-up">
            <h1>Ofertas y Promociones</h1>
            <p class="lead">Descubre los mejores descuentos en productos tecnológicos</p>
        </div>
    </div>

    <!-- Featured Offer Banner -->
    <div class="container">
        <div class="featured-offers fade-in-up stagger-1">
            <div class="offer-banner">
                <div class="banner-content">
                    <div class="offer-badge">OFERTA ESPECIAL</div>
                    <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;"> MEGA DESCUENTOS TECH</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 1.5rem;">Hasta 70% de descuento en productos seleccionados</p>
                    
                    <div class="countdown-timer">
                        <h5 class="mb-3"> Tiempo restante de la oferta</h5>
                        <div class="row g-3">
                            <div class="col-3">
                                <div class="countdown-item">
                                    <span class="countdown-number" id="days">05</span>
                                    <span class="countdown-label">Días</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="countdown-item">
                                    <span class="countdown-number" id="hours">14</span>
                                    <span class="countdown-label">Horas</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="countdown-item">
                                    <span class="countdown-number" id="minutes">23</span>
                                    <span class="countdown-label">Min</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="countdown-item">
                                    <span class="countdown-number" id="seconds">45</span>
                                    <span class="countdown-label">Seg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Offers Cards -->
    <div class="container">
        <div class="special-offers fade-in-up stagger-2">
            <h3 class="section-title">Ofertas Especiales</h3>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="offer-card flash">
                        <div class="offer-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Flash Sale 24h</h4>
                        <p>Productos seleccionados con hasta 50% de descuento por tiempo limitado</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark">24 productos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="offer-card weekend">
                        <div class="offer-icon">
                            <i class="fas fa-calendar-weekend"></i>
                        </div>
                        <h4>Fin de Semana</h4>
                        <p>Descuentos especiales en accesorios y gadgets durante el fin de semana</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark">89 productos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="offer-card clearance">
                        <div class="offer-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4>Liquidación</h4>
                        <p>Últimas unidades con descuentos increíbles. ¡Aprovecha antes de que se agoten!</p>
                        <div class="mt-3">
                            <span class="badge bg-dark text-light">45 productos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products on Offer -->
    <div class="container">
        <div class="products-section fade-in-up stagger-3">
            <div class="products-header">
                <div>
                    <h3 class="section-title mb-0">Productos en Oferta</h3>
                    <p class="text-muted">Mostrando 1-12 de 156 productos en oferta</p>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <label class="form-label mb-0">Ordenar:</label>
                    <select class="form-select" style="width: auto;">
                        <option>Mayor Descuento</option>
                        <option>Precio: Menor a Mayor</option>
                        <option>Precio: Mayor a Menor</option>
                        <option>Más Popular</option>
                    </select>
                </div>
            </div>

            <div class="filter-tabs">
                <button class="filter-tab active">Todos</button>
                <button class="filter-tab">Smartphones</button>
                <button class="filter-tab">Laptops</button>
                <button class="filter-tab">Gaming</button>
            </div>

            <section>
            <div class="container mt-4">
                <h2 class="mb-4 text-center">Ofertas Disponibles</h2>
                <div class="row g-4">
                    @foreach ($ofertas as $oferta)
                        @php
                            $producto = $oferta->producto; // relación belongsTo(Producto::class)
                            $categoria = $producto->categoria;
                            $ahorro = $oferta->precio_original - $oferta->precio_oferta;
                        @endphp

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card product-card">
                                <!-- Imagen del producto -->
                                <div class="product-image-container">
                                    <div style="height: 250px; display: flex; align-items: center; justify-content: center; background: #f8f9fa;">
                                        <img src="{{ asset('img/' . $producto->imagen_producto) }}"
                                            alt="{{ $producto->nombre_producto }}"
                                            style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                    </div>

                                    <button class="wishlist-btn">
                                        <i class="far fa-heart"></i>
                                    </button>

                                    <div class="product-discount">-{{ $oferta->descuento }}%</div>
                                </div>

                                <!-- Información del producto -->
                                <div class="product-info">
                                    <div class="product-category">{{ $categoria->nombre_categoria }}</div>
                                    <h5 class="product-title">{{ $producto->nombre_producto }}</h5>
                                    <p class="product-description">{{ $oferta->descripcion ?? $producto->descripcion_ }}</p>

                                    <div class="product-price">
                                        <span class="current-price">${{ number_format($oferta->precio_oferta, 2) }}</span>
                                        <span class="original-price">${{ number_format($oferta->precio_original, 2) }}</span>
                                        <span class="savings">Ahorras ${{ number_format($ahorro, 2) }}</span>
                                    </div>

                                    <div class="offer-timer">
                                        ⏰ Oferta termina en {{ \Carbon\Carbon::parse($oferta->fecha_fin)->diffInDays(now()) }} días
                                    </div>

                                    <div class="product-actions">
                                       

                                            @php
                                                                if(Auth::check()) {
                                                                    // Usuario autenticado
                                                                    $enCarrito = \App\Models\Carrito::where('user_id', Auth::id())
                                                                        ->where('producto_id', $producto->id_producto)
                                                                        ->exists();
                                                                } else {
                                                                    // Invitado (carrito en sesión)
                                                                    $sessionCarrito = session()->get('carrito', []);
                                                                    $enCarrito = isset($sessionCarrito[$producto->id_producto]);
                                                                }
                                                            @endphp
                                                                @if ($enCarrito)
                                                                <form action="{{ route('carrito.quitar', $producto->id_producto) }}" method="POST">
                                                                             @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger">
                                                                                Quitar del carrito
                                                                            </button>
                                                                        </form>
                                                                        @else
                                                    <form action="{{ route('carrito.agregar', $producto->id_producto) }}" method="POST" class="d-grid">
                                                            @csrf
                                                            <button type="submit" 
                                                                class="btn add-to-cart-btn"
                                                                data-product="{{ $producto->nombre_producto }}"
                                                                data-price="{{ $producto->precio }}"
                                                                data-image="{{ asset('img/' . $producto->imagen_producto) }}"
                                                                style="background: var(--tech-blue); border: none; color: white; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                                                                
                                                                <i class="fas fa-shopping-cart me-2"></i>
                                                                Agregar al carrito
                                                            </button>
                                                        </form>
                                                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        </div>
    </div>


<!-- Pagination -->
<nav aria-label="Navegación de ofertas" class="mt-4">
    <ul class="pagination justify-content-center">
        <!-- Botón Anterior -->
        @if ($ofertas->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Anterior</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $ofertas->previousPageUrl() }}" rel="prev">Anterior</a>
            </li>
        @endif

        <!-- Números de página -->
        @foreach ($ofertas->getUrlRange(1, $ofertas->lastPage()) as $page => $url)
            @if ($page == $ofertas->currentPage())
                <li class="page-item active">
                    <span class="page-link">{{ $page }}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endif
        @endforeach

        <!-- Botón Siguiente -->
        @if ($ofertas->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $ofertas->nextPageUrl() }}" rel="next">Siguiente</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Siguiente</span>
            </li>
        @endif
    </ul>
</nav>

    <!-- Newsletter Section -->
    <div class="container">
        <div class="newsletter-section fade-in-up stagger-4">
            <h3 class="section-title">📧 No Te Pierdas Nuestras Ofertas</h3>
            <p class="text-muted mb-4">Suscríbete a nuestro newsletter y recibe notificaciones de ofertas exclusivas</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Tu email aquí...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-paper-plane me-2"></i>Suscribirse
                        </button>
                    </div>
                    <small class="text-muted mt-2 d-block">🔒 Tu email está seguro con nosotros. Sin spam.</small>
                </div>
            </div>
        </div>
    </div>

      <!-- Footer -->
       <section>

           <footer class="footer">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-4 mb-4">
                    <h5><i class="fas fa-microchip me-2"></i>TechZone</h5>
                    <p class="col-lg mb-4">Tu tienda de confianza para productos tecnológicos de última generación.</p>
                    <div class="d-flex">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/techzone0704/" class="me-3"><i class="fab fa-instagram"></i></a>
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
</section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Countdown timer functionality
        function updateCountdown() {
            const endDate = new Date('2024-12-31T23:59:59').getTime();
            const now = new Date().getTime();
            const distance = endDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById('days').innerText = days.toString().padStart(2, '0');
            document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown(); // Initial call

        // Filter tabs functionality
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Here you would typically filter products based on category
                console.log('Filtering by:', this.textContent);
            });
        });

        // Wishlist functionality
        document.querySelectorAll('.wishlist-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    this.style.background = 'var(--tech-red)';
                    this.style.color = 'white';
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    this.style.background = 'rgba(255,255,255,0.9)';
                    this.style.color = '';
                }
            });
        });

        // Add to cart functionality
        document.querySelectorAll('.btn-add-cart').forEach(btn => {
            btn.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check me-2"></i>Agregado';
                this.style.background = 'var(--tech-accent)';
                this.style.color = 'var(--tech-dark)';
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.style.background = 'var(--tech-blue)';
                    this.style.color = 'white';
                }, 2000);
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.product-card, .offer-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>

</html>
