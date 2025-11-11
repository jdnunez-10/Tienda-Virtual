<!DOCTYPE html>
<html lang="es">

<head>
    <title>Categorías - TechZone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            --tech-purple: #8b5cf6;
            --tech-pink: #ec4899;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
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

        /* Hero Section */
        .hero-categories {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 4rem 0;
            color: white;
            margin-bottom: 3rem;
        }

        .hero-categories h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-categories p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Category Cards */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
            min-height: 300px;
            display: flex;
            flex-direction: column;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .category-header {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .category-gradient {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .category-icon {
            font-size: 4rem;
            color: white;
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .category-card:hover .category-icon {
            transform: scale(1.1);
        }

        .category-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .category-card:hover .category-overlay {
            opacity: 1;
        }

        .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,0.9);
            color: var(--tech-blue);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.875rem;
        }

        .category-content {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-dark);
            margin-bottom: 0.5rem;
        }

        .category-description {
            color: #666;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .category-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: var(--tech-gray);
            border-radius: 10px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-blue);
        }

        .stat-label {
            font-size: 0.875rem;
            color: #666;
        }

        .category-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-explore {
            flex: 1;
            background: var(--tech-blue);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-explore:hover {
            background: #0052a3;
            transform: translateY(-2px);
            color: white;
        }

        .btn-wishlist {
            background: transparent;
            border: 2px solid var(--tech-blue);
            color: var(--tech-blue);
            padding: 0.75rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-wishlist:hover {
            background: var(--tech-blue);
            color: white;
        }

        /* Featured Categories */
        .featured-categories {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .featured-title {
            text-align: center;
            margin-bottom: 2rem;
        }

        .featured-title h2 {
            font-weight: 700;
            color: var(--tech-dark);
            margin-bottom: 0.5rem;
        }

        .featured-categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .featured-card {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            color: white;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .featured-card:hover {
            transform: scale(1.05);
        }

        .featured-card.blue {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .featured-card.green {
            background: linear-gradient(135deg, #48c6ef 0%, #6f86d6 100%);
        }

        .featured-card.orange {
            background: linear-gradient(135deg, #ff9a56 0%, #ffad56 100%);
        }

        .featured-card.purple {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: var(--tech-dark);
        }

        .featured-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .featured-card h4 {
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        /* Search Section */
        .search-categories {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .search-box {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem 1rem 3rem;
            border: 2px solid #e1e5e9;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--tech-blue);
            box-shadow: 0 0 0 0.2rem rgba(0,102,204,0.25);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-categories h1 {
                font-size: 2rem;
            }
            
            .hero-categories p {
                font-size: 1rem;
            }
            
            .category-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .featured-categories-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            
            .category-actions {
                flex-direction: column;
            }
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

        /* Animation */
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
                        <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('categorias') }}">Categorías</a>
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
    <section class="hero-categories">
        <div class="container text-center">
            <h1 class="fade-in-up">Explora Nuestras Categorías</h1>
            <p class="lead fade-in-up stagger-1">Descubre la mejor tecnología organizada por categorías</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>
        </nav>
    </div>

    <!-- Search Section -->
    <div class="container">
        <div class="search-categories fade-in-up stagger-2">
            <div class="text-center mb-4">
                <h3>Busca tu Categoría Ideal</h3>
                <p class="text-muted">Encuentra exactamente lo que necesitas</p>
            </div>
            <div class="search-box">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Buscar categorías..." id="categorySearch">
            </div>
        </div>
    </div>

    <!-- Categorías Populares -->
<div class="container">
    <div class="featured-categories fade-in-up stagger-3">
        <div class="featured-title">
            <h2>Categorías Más Populares</h2>
            <p class="text-muted">Las categorías más buscadas por nuestros clientes</p>
        </div>

        <div class="featured-categories-grid">
            @foreach($categorias->take(4) as $categoria)
                <div class="featured-card" >
                    <div class="featured-icon">
                    </div>
                    <h4>{{ $categoria->nombre_categoria }}</h4>
                    <p>{{ $categoria->productos_count }} productos</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Grid principal de categorías -->
        <div class="container">
            <div class="category-grid" id="categoriesGrid">
                @foreach($categorias as $categoria)
                    <div class="category-card fade-in-up">
                        <div class="category-header">
                            <div class="category-gradient"
>
                            
                            </div>
                            <div class="category-overlay">
                                <i class="fas fa-eye text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="category-badge">{{ $categoria->productos_count }} productos</div>
                        </div>

                        <div class="category-content">
                            <h3 class="category-title">{{ $categoria->nombre_categoria }}</h3>
                            <p class="category-description">Explora nuestra selección de {{ strtolower($categoria->nombre_categoria) }} disponibles.</p>

                            <div class="category-actions">
                                <a href="{{ route('productos', $categoria->id) }}" class="btn btn-explore">
                                    <i class="fas fa-arrow-right me-2"></i>Explorar
                                </a>
                                <button class="btn btn-wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Productos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Gaming</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
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
    
        
    </body>
</html>

