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

        /* Breadcrumb */
        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item a {
            color: var(--tech-blue);
            text-decoration: none;
        }

        /* Filter Sidebar */
        .filter-sidebar {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .filter-section {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .filter-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .filter-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--tech-dark);
        }

        .price-range {
            margin-top: 1rem;
        }

        /* Product Grid */
        .products-header {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .product-card {
            background: white;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .product-image-container {
            position: relative;
            height: 280px;
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

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 2;
        }

        .wishlist-btn {
            position: absolute;
            top: 15px;
            left: 15px;
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

        .wishlist-btn.active {
            background: var(--tech-orange);
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

        .product-rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .stars {
            color: #ffc107;
        }

        .rating-count {
            font-size: 0.875rem;
            color: #666;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .current-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tech-blue);
        }

        .original-price {
            font-size: 1rem;
            color: #999;
            text-decoration: line-through;
        }

        .discount {
            background: var(--tech-orange);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
            font-size: 0.75rem;
            font-weight: 600;
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

        /* Pagination */
        .pagination .page-link {
            color: var(--tech-blue);
            border: 1px solid #dee2e6;
            padding: 0.75rem 1rem;
        }

        .pagination .page-link:hover {
            background: var(--tech-blue);
            border-color: var(--tech-blue);
            color: white;
        }

        .pagination .active .page-link {
            background: var(--tech-blue);
            border-color: var(--tech-blue);
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

        /* Mobile Filters */
        .mobile-filters {
            display: none;
        }

        @media (max-width: 991.98px) {
            .desktop-filters {
                display: none;
            }
            
            .mobile-filters {
                display: block;
            }
            
            .filter-sidebar {
                position: static;
                margin-bottom: 2rem;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
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
                            <li><a class="dropdown-item" href="#">Accesorios</a></li>
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

    <!-- Breadcrumb -->
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container py-4">
        <div class="row">
            <!-- Mobile Filter Button -->
            <div class="col-12 mobile-filters mb-4">
                <button class="btn btn-outline-primary w-100" data-bs-toggle="offcanvas" data-bs-target="#mobileFilters">
                    <i class="fas fa-filter me-2"></i>Filtros
                </button>
            </div>

            <!-- Desktop Filters Sidebar -->
            <div class="col-lg-3 desktop-filters">
                <div class="filter-sidebar">
                    <h5 class="filter-title">
                        <i class="fas fa-filter me-2"></i>Filtros
                    </h5>

                    <!-- Category Filter -->
                    <div class="filter-section">
                        <h6 class="filter-title">Categorías</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="smartphones">
                            <label class="form-check-label" for="smartphones">
                                Smartphones <span class="text-muted">(24)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="laptops">
                            <label class="form-check-label" for="laptops">
                                Laptops <span class="text-muted">(18)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gaming">
                            <label class="form-check-label" for="gaming">
                                Gaming <span class="text-muted">(12)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="accesorios">
                            <label class="form-check-label" for="accesorios">
                                Accesorios <span class="text-muted">(35)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="filter-section">
                        <h6 class="filter-title">Rango de Precio</h6>
                        <div class="price-range">
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="number" class="form-control" placeholder="Min" id="minPrice">
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control" placeholder="Max" id="maxPrice">
                                </div>
                            </div>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="enOferta">
                            <label class="form-check-label" for="enOferta">
                                Solo en oferta
                            </label>
                        </div>
                    </div>

                    <!-- Brand Filter -->
                    <div class="filter-section">
                        <h6 class="filter-title">Marcas</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="apple">
                            <label class="form-check-label" for="apple">Apple</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="samsung">
                            <label class="form-check-label" for="samsung">Samsung</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sony">
                            <label class="form-check-label" for="sony">Sony</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="asus">
                            <label class="form-check-label" for="asus">ASUS</label>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100 mb-3">Aplicar Filtros</button>
                    <button class="btn btn-outline-secondary w-100">Limpiar Filtros</button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="col-lg-9">
                <!-- Products Header -->
                <div class="products-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 class="mb-0">Productos Tecnológicos</h4>
                            <p class="text-muted mb-0">Mostrando 1-12 de 89 productos</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-md-end justify-content-start mt-3 mt-md-0">
                                <div class="d-flex align-items-center gap-3">
                                    <label class="form-label mb-0">Ordenar por:</label>
                                    <select class="form-select" style="width: auto;">
                                        <option>Más Popular</option>
                                        <option>Precio: Menor a Mayor</option>
                                        <option>Precio: Mayor a Menor</option>
                                        <option>Más Nuevo</option>
                                        <option>Mejor Valorado</option>
                                    </select>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary active" title="Vista en cuadrícula">
                                            <i class="fas fa-th"></i>
                                        </button>
                                        <button class="btn btn-outline-secondary" title="Vista en lista">
                                            <i class="fas fa-list"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="row g-4" id="productsGrid">
                    <!-- Producto 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #667eea, #764ba2); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-mobile-alt text-white" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <div class="product-badge">
                                    <span class="badge bg-danger">-20%</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Smartphones</div>
                                <h5 class="product-title">iPhone 14 Pro Max</h5>
                                <p class="product-description">Smartphone premium con cámara profesional, chip A16 Bionic y pantalla ProMotion de 6.7"</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(127 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$999</span>
                                    <span class="original-price">$1,249</span>
                                    <span class="discount">20%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #f093fb, #f5576c); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-laptop text-white" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <div class="product-badge">
                                    <span class="badge bg-success">Nuevo</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Laptops</div>
                                <h5 class="product-title">MacBook Air M2</h5>
                                <p class="product-description">Laptop ultradelgada con chip M2, 8GB RAM, SSD 256GB y pantalla Retina de 13.6"</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(89 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$1,199</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #4facfe, #00f2fe); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-gamepad text-white" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Gaming</div>
                                <h5 class="product-title">PlayStation 5</h5>
                                <p class="product-description">Consola de nueva generación con SSD ultra rápido y gráficos 4K ray tracing</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(203 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$499</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #fa709a, #fee140); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-headphones text-white" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <div class="product-badge">
                                    <span class="badge bg-warning">Agotándose</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Accesorios</div>
                                <h5 class="product-title">AirPods Pro 2</h5>
                                <p class="product-description">Auriculares inalámbricos con cancelación activa de ruido y audio espacial</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(156 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$249</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #a8edea, #fed6e3); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-tablet-alt text-dark" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Tablets</div>
                                <h5 class="product-title">iPad Air 5</h5>
                                <p class="product-description">Tablet con chip M1, pantalla Liquid Retina de 10.9" y compatibilidad con Apple Pencil</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(94 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$599</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #ff9a9e, #fecfef); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-desktop text-dark" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <div class="product-badge">
                                    <span class="badge bg-info">Bestseller</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Monitores</div>
                                <h5 class="product-title">Monitor Gaming 4K</h5>
                                <p class="product-description">Monitor 27" 4K HDR con 144Hz, ideal para gaming profesional y diseño</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(78 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$449</span>
                                    <span class="original-price">$529</span>
                                    <span class="discount">15%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 7 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #ffecd2, #fcb69f); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-camera text-dark" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Cámaras</div>
                                <h5 class="product-title">Canon EOS R6</h5>
                                <p class="product-description">Cámara mirrorless profesional con sensor full-frame y grabación 4K</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(142 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$2,499</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 8 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #a18cd1, #fbc2eb); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-keyboard text-white" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <div class="product-badge">
                                    <span class="badge bg-danger">-30%</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Periféricos</div>
                                <h5 class="product-title">Teclado Mecánico RGB</h5>
                                <p class="product-description">Teclado gaming mecánico con switches Cherry MX, RGB personalizable</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(95 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$89</span>
                                    <span class="original-price">$129</span>
                                    <span class="discount">30%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 9 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card">
                            <div class="product-image-container">
                                <div style="height: 280px; background: linear-gradient(45deg, #84fab0, #8fd3f4); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-mouse text-white" style="font-size: 4rem;"></i>
                                </div>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Periféricos</div>
                                <h5 class="product-title">Mouse Gaming Pro</h5>
                                <p class="product-description">Mouse gaming inalámbrico con sensor óptico de 25,600 DPI y 11 botones</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(167 reseñas)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$79</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-add-cart">
                                        <i class="fas fa-shopping-cart me-2"></i>Agregar
                                    </button>
                                    <button class="btn btn-quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-5">
                    <button class="btn btn-outline-primary btn-lg" id="loadMoreBtn">
                        <span class="btn-text">Cargar Más Productos</span>
                        <span class="loading d-none"></span>
                    </button>
                </div>

                <!-- Pagination -->
                <nav class="mt-5" aria-label="Paginación de productos">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <span class="page-link">...</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">8</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Mobile Filters Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileFilters">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">
                <i class="fas fa-filter me-2"></i>Filtros
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="filter-sidebar">
                <!-- Category Filter -->
                <div class="filter-section">
                    <h6 class="filter-title">Categorías</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="smartphones-mobile">
                        <label class="form-check-label" for="smartphones-mobile">
                            Smartphones <span class="text-muted">(24)</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="laptops-mobile">
                        <label class="form-check-label" for="laptops-mobile">
                            Laptops <span class="text-muted">(18)</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gaming-mobile">
                        <label class="form-check-label" for="gaming-mobile">
                            Gaming <span class="text-muted">(12)</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="accesorios-mobile">
                        <label class="form-check-label" for="accesorios-mobile">
                            Accesorios <span class="text-muted">(35)</span>
                        </label>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="filter-section">
                    <h6 class="filter-title">Rango de Precio</h6>
                    <div class="price-range">
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="number" class="form-control" placeholder="Min" id="minPrice-mobile">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" placeholder="Max" id="maxPrice-mobile">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brand Filter -->
                <div class="filter-section">
                    <h6 class="filter-title">Marcas</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="apple-mobile">
                        <label class="form-check-label" for="apple-mobile">Apple</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="samsung-mobile">
                        <label class="form-check-label" for="samsung-mobile">Samsung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sony-mobile">
                        <label class="form-check-label" for="sony-mobile">Sony</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="asus-mobile">
                        <label class="form-check-label" for="asus-mobile">ASUS</label>
                    </div>
                </div>

                <button class="btn btn-primary w-100 mb-3">Aplicar Filtros</button>
                <button class="btn btn-outline-secondary w-100">Limpiar Filtros</button>
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
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Productos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Gaming</a></li>
                        <li><a href="#">Accesorios</a></li>
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