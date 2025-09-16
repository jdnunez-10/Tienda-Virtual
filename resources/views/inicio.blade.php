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
                        <a class="nav-link dropdown-toggle" href="{{ route('categorias') }}" role="button" data-bs-toggle="dropdown">
                            Categorías
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Smartphones</a></li>
                            <li><a class="dropdown-item" href="#">Laptops</a></li>
                            <li><a class="dropdown-item" href="#">Gaming</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center">
                    <button class="btn btn-link me-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search"></i>
                    </button>
                    <a href="#" class="btn btn-link position-relative me-3">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </a>
                    <a href="#" class="btn btn-link">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
        <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content fade-in-up">
                        <h1>La Mejor Tecnología a Tu Alcance</h1>
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
                <div class="col-md-4">
                    <div class="category-card">
                         <div class="product-image-container">
                                    <img src="{{ asset('img/Smartphones.webp') }}" alt="Smartphones" class="product-image" >
                                 </div>
                        <h4>Smartphones</h4>
                        <p class="text-muted">Los últimos modelos de iPhone, Samsung, Huawei y más</p>
                        <a href="#" class="btn btn-outline-primary">Ver Más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                         <div class="product-image-container">
                                    <img src="{{ asset('img/Laptops.jpg') }}" alt="Laptops" class="product-image" >
                                 </div>
                        <h4>Laptops</h4>
                        <p class="text-muted">Portátiles para trabajo, gaming y uso personal</p>
                        <a href="#" class="btn btn-outline-primary">Ver Más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="product-image-container">
                                    <img src="{{ asset('img/Gaming.jpg') }}" alt="Gaming" class="product-image" >
                                 </div>
                        <h4>Gaming</h4>
                        <p class="text-muted">Consolas, periféricos y accesorios gaming</p>
                        <a href="#" class="btn btn-outline-primary">Ver Más</a>
                    </div>
                </div>
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
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                                <div class="product-image-container">
                                    <img src="{{ asset('img/Iphone.webp') }}" alt="iPhone 14 Pro Max" class="product-image" >
                                 </div>
                           
                            <span class="position-absolute top-0 end-0 m-2 badge bg-danger">-20%</span>
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
                                <span class="price-tag">$799</span>
                            </div>
                            <h5 class="card-title">iPhone 14 Pro Max</h5>
                            <p class="card-text text-muted">Smartphone con cámara profesional y chip A16 Bionic</p>
                            <div class="d-grid">
                                <button class="btn btn-primary">Agregar al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>

                <head>
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
                        background: transparent;
                    }

                    /* Efecto hover para la imagen */
                    .product-card:hover .product-image {
                        transform: scale(1.05);
                    }
                    </style>
                </head>

                <div class="col-lg-4 col-md-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                            <div class="product-image-container">
                                    <img src="{{ asset('img/MacBook Air.jpg') }}" alt="MacBook Air" class="product-image" >
                                 </div>
                            <span class="position-absolute top-0 end-0 m-2 badge bg-success">Nuevo</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="price-tag">$1,299</span>
                            </div>
                            <h5 class="card-title">MacBook Air M2</h5>
                            <p class="card-text text-muted">Laptop ultradelgada con SSD de 256 GB y 8GB RAM</p>
                            <div class="d-grid">
                                <button class="btn btn-primary">Agregar al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                             <div class="product-image-container">
                                    <img src="{{ asset('img/Play5.jpg') }}" alt="PlayStation 5" class="product-image" >
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
                                <span class="price-tag">$499</span>
                            </div>
                            <h5 class="card-title">PlayStation 5</h5>
                            <p class="card-text text-muted">Consola de nueva generación con gráficos 4K</p>
                            <div class="d-grid">
                                <button class="btn btn-primary">Agregar al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buscar Productos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="¿Qué estás buscando?">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation on scroll
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

        // Observe cards for animation
        document.querySelectorAll('.category-card, .product-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>