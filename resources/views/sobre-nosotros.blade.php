<!DOCTYPE html>
<html lang="es">
<head>
    <title>TechZone - Sobre Nosotros</title>
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
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('sobre-nosotros') }}">Sobre nosotros</a>
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


    <!-- Hero Section -->
    <section class="hero-categories">
        <div class="container text-center">
            <h1 class="fade-in-up">Conócenos</h1>
            <p class="lead fade-in-up stagger-1">Historia, misión, visión y valores de TechZone</p>
        </div>
    </section>

    <!-- Contenido -->
    <div class="container my-5">
        <!-- Historia -->
        <section class="mb-5 fade-in-up">
            <h2 class="text-primary"><i class="fas fa-history"></i> Nuestra Historia</h2>
            <p>
                TechZone nació con la visión de acercar la tecnología de alta calidad a todas las personas. Fundada por un grupo de entusiastas tecnológicos,
                 la empresa inició como un pequeño emprendimiento dedicado a la venta de dispositivos móviles y accesorios. Con el tiempo, gracias al compromiso con el cliente, 
                 la innovación constante y la búsqueda de productos de calidad, TechZone fue creciendo hasta convertirse en un referente en el mercado tecnológico.
                Hoy en día, TechZone se posiciona como una empresa confiable, moderna y accesible, ofreciendo smartphones, laptops y accesorios tecnológicos con precios competitivos y un servicio excepcional.
            </p>
        </section>

        <!-- Misión -->
        <section class="mb-5 fade-in-up">
            <h2 class="text-primary"><i class="fas fa-bullseye"></i> Misión</h2>
            <p>
               Brindar a nuestros clientes la mejor experiencia tecnológica, ofreciendo smartphones, laptops y accesorios de alta calidad a precios accesibles, 
               acompañados de un servicio personalizado, confiable y eficiente que garantice su satisfacción total.
            </p>
        </section>

        <!-- Visión -->
        <section class="mb-5 fade-in-up">
            <h2 class="text-primary"><i class="fas fa-eye"></i> Visión</h2>
            <p>
                Convertirnos en la empresa líder del mercado tecnológico en la región, reconocida por nuestra innovación, excelencia en el servicio, diversidad de productos 
                y compromiso con la accesibilidad digital para todos.
            </p>
        </section>

        <!-- Valores -->
        <section class="mb-5 fade-in-up">
            <h2 class="text-primary"><i class="fas fa-heart"></i> Valores</h2>
            <ul>
                <li>1. Innovación:
                    Buscamos ofrecer productos tecnológicos modernos y de vanguardia.
                </li>
                <li>2. Calidad:
                        Garantizamos dispositivos y accesorios que cumplen altos estándares de rendimiento y durabilidad.
                        </li>
                <li>3. Compromiso con el cliente:
                    Nuestra prioridad es ofrecer una experiencia de compra transparente, rápida y satisfactoria.
                    </li>
                <li>4. Honestidad:
                    Actuamos con ética, claridad y responsabilidad en cada una de nuestras operaciones.
                    </li>
                <li>5. Accesibilidad:
                    Creemos que la tecnología debe estar al alcance de todos, por eso ofrecemos precios competitivos y opciones variadas.
                </li>
                <li>
                    6. Trabajo en equipo:
                    Fomentamos un ambiente colaborativo que impulsa el crecimiento y mejora continua.
                </li>
            </ul>
        </section>

        <!-- Preguntas Frecuentes -->
        <section class="mb-5 fade-in-up">
            <h2 class="text-primary"><i class="fas fa-question-circle"></i> Preguntas Frecuentes</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                            ¿Cómo realizo una compra?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Selecciona tus productos, añádelos al carrito y sigue el proceso de pago seguro.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                            ¿Cuáles son los métodos de pago?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Aceptamos tarjetas de crédito, débito, transferencias bancarias y pagos en línea.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Políticas -->
        <section class="mb-5 fade-in-up">
            <h2 class="text-primary"><i class="fas fa-file-contract"></i> Políticas</h2>
            <p>
                Contamos con políticas claras de devolución, privacidad y envíos para garantizar tu confianza.
            </p>
        </section>
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

</body>
</html>