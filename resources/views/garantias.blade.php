    
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
            margin-bottom: 2rem;
        }

        .hero-categories h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: -1rem;
        }

        .hero-categories p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* garantias Section */
        .garan-categories {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .garan-box {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }

        .garan-input {
            width: 100%;
            padding: 1rem 1.5rem 1rem 3rem;
            border: 2px solid #e1e5e9;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .garan-input:focus {
            border-color: var(--tech-blue);
            box-shadow: 0 0 0 0.2rem rgba(0,102,204,0.25);
            outline: none;
        }

        .garan-icon {
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
  </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-categories">
        <div class="container text-center">
            <h1 class="fade-in-up">Politicas de Garantia</h1>
            <hr>
            <p>En TechZone trabajamos para ofrecer productos de alta calidad, respaldados por fabricantes confiables y políticas de garantía transparentes. A continuación se detallan las condiciones aplicables a todos los productos adquiridos en nuestra tienda.</p>
        </div>
    </section>

    <!-- garantias Section -->
    <div class="container">
        <div class="garan-categories fade-in-up stagger-2">
            <div class="text-left mb-4">
                

    <h3 class="mt-4">1. Cobertura de la Garantía</h3>
    <p>Todos los productos cuentan con garantía contra <strong>defectos de fabricación</strong> por un período definido por cada marca. La garantía <strong>no cubre</strong> daños ocasionados por:</p>

    <ul>
        <li>Golpes o caídas.</li>
        <li>Uso inapropiado o negligente.</li>
        <li>Manipulación interna del producto.</li>
        <li>Humedad o exposición a líquidos.</li>
        <li>Instalación incorrecta de software o accesorios.</li>
        <li>Alteraciones no autorizadas.</li>
        <li>Uso eléctrico inadecuado o picos de voltaje.</li>
    </ul>

    <h3 class="mt-4">2. Período de Garantía</h3>
    <p>El tiempo de garantía varía según la categoría del producto:</p>

    <table class="table table-bordered w-75">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Tiempo de Garantía</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Laptops</td>
                <td>12 meses</td>
            </tr>
            <tr>
                <td>Smartphones</td>
                <td>12 meses</td>
            </tr>
            <tr>
                <td>Accesorios</td>
                <td>3 a 6 meses</td>
            </tr>
            <tr>
                <td>Componentes</td>
                <td>6 meses</td>
            </tr>
            <tr>
                <td>Audio y periféricos</td>
                <td>6 a 12 meses</td>
            </tr>
        </tbody>
    </table>

    <h3 class="mt-4">3. Proceso para Hacer Efectiva la Garantía</h3>
    <p>Para solicitar la garantía, el cliente debe presentar:</p>

    <ul>
        <li>El producto completo (con accesorios).</li>
        <li>La factura o comprobante de compra.</li>
        <li>Una descripción del problema.</li>
    </ul>

    <p>Tras evaluar el producto:</p>
    <ul>
        <li>Si tiene defecto de fábrica: se repara sin costo.</li>
        <li>Si no puede repararse: se sustituye por uno igual o equivalente.</li>
        <li>Si no hay disponibilidad: se entrega una nota de crédito.</li>
    </ul>

    <h3 class="mt-4">4. Casos en los que la Garantía No Aplica</h3>
    <ul>
        <li>Manipulación interna por personal no autorizado.</li>
        <li>Daño físico visible.</li>
        <li>Reparaciones por terceros.</li>
        <li>Instalación de software no oficial.</li>
        <li>Daños por accidentes.</li>
        <li>Sellos de garantía rotos.</li>
    </ul>

    <h3 class="mt-4">5. Garantías por Envíos</h3>
    <p>Si el producto llega dañado por transporte, debe reportarse dentro de las primeras <strong>24 horas</strong> tras la entrega. Después de ese tiempo no se aceptarán reclamos.</p>
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
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Soporte</h5>
                  <ul class="list-unstyled">
                        <li><a href="{{ route('faq') }}">Preguntas frecuentes</a></li>
                        <li><a href="{{ route('devoluciones') }}">Devoluciones</a></li>
                        <li><a href="#">Garantía</a></li>
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

