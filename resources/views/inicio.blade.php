    
    <!DOCTYPE html>
<html lang="es">

<head>
    <title>TechZone - Tu Tienda de Tecnología</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/imagen fondo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="img/imagen fondo.jpg">

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
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #fafafa;
        }

        /* Navigation Styles */
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

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn-tech {
            background: var(--tech-accent);
            color: var(--tech-dark);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-tech:hover {
            background: #00cc66;
            transform: translateY(-2px);
            color: var(--tech-dark);
        }
        
        /* Category Cards */
        .category-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .category-icon {
            font-size: 3rem;
            color: var(--tech-blue);
            margin-bottom: 1rem;
        }

         /* Product Cards */
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .product-image {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }

        .price-tag {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-blue);
        }

        .rating {
            color: #ffc107;
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

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1rem;
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
                        <a class="nav-link " href="{{ route('productos') }}">Productos</a>
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

    
        <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content fade-in-up">
                        <h1>La mejor tecnología a tu alcance</h1>
                        <p class="lead">Descubre los últimos smartphones, laptops y accesorios tecnológicos con la mejor calidad y precios increíbles.</p>
                        <a href="#products" class="btn btn-tech btn-lg">Ver Productos</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('img/imagen-fondo.jpg') }}" alt="Tecnología" class="img-fluid hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CSS interno para fondo de la sección -->
        <head>
    <style>
       .hero-image {
            max-height: 500px;
            width: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            border: 4px solid rgba(255, 255, 255, 0.2);
        }

        .hero-image:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

            <!-- Categories Section -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-8 mx-auto text-center">
                            <h2 class="display-6 fw-bold mb-3">Categorías Populares</h2>
                            <p class="lead text-muted">Explora nuestra amplia selección de productos tecnológicos</p>
                        </div>
                    </div>
                    
                    <div class="row g-4">
                        @foreach ($categorias as $categoria)
                            <div class="col-md-4">
                                <div class="category-card text-center p-3 bg-white shadow-sm rounded">
                                    <div class="product-image-container mb-3">
                                        <img src="{{ asset('img/' . $categoria->imagen_categoria) }}" 
                                            alt="{{ $categoria->nombre_categoria }}" 
                                            class="product-image">
                                    </div>
                                    <h4>{{ $categoria->nombre_categoria }}</h4>
                                    <p class="text-muted">{{ $categoria->descripcion }}</p>
                                    <a href="{{ route('productos') }}" class="btn btn-outline-primary">Ver Más</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
                        
                    <!-- Featured Products -->
                    <section id="products" class="py-5">
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col-lg-8 mx-auto text-center">
                                    <h2 class="display-6 fw-bold mb-3">Productos Destacados</h2>
                                    <p class="lead text-muted">Los mejores productos tecnológicos seleccionados para ti</p>
                                </div>
                            </div>

                            <div class="row g-4">
                                @foreach ($productosDestacados as $producto)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card product-card h-100">
                                            <div class="position-relative">
                                                <div class="product-image-container">
                                                    <img src="{{ asset('img/' . $producto->imagen_producto) }}" 
                                                        alt="{{ $producto->nombre_producto }}" 
                                                        class="product-image">
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span class="price-tag">${{ number_format($producto->precio, 2) }}</span>
                                                </div>
                                                <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                                                <p class="card-text text-muted"> {{ $producto->descripcion_ }}</p>
                                                <div class="d-grid">

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

                   <style>
                    .product-image-container {
                        height: 250px;
                        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        overflow: hidden;
                        border-radius: 8px 8px 0 0;
                        position: relative;
                    }
                    .product-image {
                        width: 100%;
                        height: 100%;
                        object-fit: contain;
                        padding: 20px;
                        transition: transform 0.3s ease;
                    }
                    .product-card:hover .product-image {
                        transform: scale(1.05);
                    }
                    </style>


                        <!-- Pagination -->
                <nav aria-label="Navegación de productosDestacados" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <!-- Botón Anterior -->
                        @if ($productosDestacados->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">Anterior</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $productosDestacados->previousPageUrl() }}" rel="prev">Anterior</a>
                            </li>
                        @endif

                        <!-- Números de página -->
                        @foreach ($productosDestacados->getUrlRange(1, $productosDestacados->lastPage()) as $page => $url)
                            @if ($page == $productosDestacados->currentPage())
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
                        @if ($productosDestacados->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $productosDestacados->nextPageUrl() }}" rel="next">Siguiente</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">Siguiente</span>
                            </li>
                        @endif
                    </ul>
                </nav>

    <!-- Newsletter Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center text-white">
                    <h3 class="mb-3">Mantente Actualizado</h3>
                    <p class="mb-4">Suscríbete a nuestro newsletter y recibe las últimas ofertas y novedades tecnológicas</p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Tu email aquí...">
                                <button class="btn btn-tech" type="button">Suscribirse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


</body>
</html>