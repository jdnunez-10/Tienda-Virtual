    
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Preguntas FRecuentes - TechZone</title>
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
            padding: 1.5rem 0;
            color: white;
            margin-bottom: 2rem;
        }

        .hero-categories h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .container{
            margin-bottom: 0.5rem;
        }

        .hero-categories p {
            font-size: 1.2rem;
            opacity: 0.9;
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



        .accordion-button:not(.collapsed) {
            background-color: #0d6efd !important;
            color: #fff !important;
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        .accordion-body {
            background-color: #eef5ff;
        }

        .accordion-item {
            border: 1px solid #0d6efd;
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
            <h1 class="fade-in-up">Preguntas Frecuentes</h1>
        </div>
    </section>

    <!-- Search Section -->


    <div class="container">
        <div class="accordion" id="accordionGarantias">
            <!-- Pregunta 1-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        ¿Cuánto tiempo de garantía tienen los productos?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        Todos nuestros productos cuentan con una garantía mínima de 12 meses contra defectos de fábrica.
                    </div>
                </div>
            </div>
            <!-- Pregunta 2-->
                
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        ¿Por qué siempre me piden mi nombre al hacer la factura?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        Esto nos permite darle seguimiento a tu compra en caso de algún reclamo.
                    </div>
                </div>
                </div>
            
            <!-- Pregunta 3-->
                
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        ¿Puedo pedir que me busquen una factura?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        En tu perfil de usuario, puedes ver la información de los pedidos realizados. En caso de que necesites que se reenvíe la factura electrónica, nos puedes escribir al correo info@techzone.com. con tu nombre completo, fecha de compra y el correo para enviar la factura electrónica.
                    </div>
                </div>
                </div>
            <!-- Pregunta 4-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        ¿Qué necesito para hacer válida la garantía?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        Para procesar una garantía, debes presentar tu factura o comprobante de compra original.
                    </div>
                </div>
            </div>
            <!-- Pregunta 5-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        ¿Qué cosas no cubre la garantía?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        La garantía no cubre daños por golpes, humedad, mal uso, modificaciones o reparaciones no autorizadas.
                    </div>
                </div>
            </div>
            <!-- Pregunta 6-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                        Si tengo un reclamo por un producto que no funciona ¿Qué hago?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        Busque la factura ya que es un requisito presentarla, no se reciben artículos sin su
respectiva factura.
                    <p>Preséntese en la tienda que realizo el despacho del pedido (se indica en la factura) con el artículo y todas sus piezas o partes.</p>
                    <p>Pida ayuda al Encargado de Servicio al Cliente, él o ella verificará los datos y enviará el producto al centro de servicio técnico que revisará el producto y solamente ellos podrán aprobar un cambio.</p>
                    <p>Si el artículo está dentro del periodo de garantía, lo recibirán para que el centro de servicio lo revise. Una vez que ellos den su criterio técnico se le informará desde la tienda de qué manera será resuelto su problema.</p>
                    </div>
                </div>
            </div>
            <!-- Pregunta 7-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                        ¿Cuánto tarda mi pedido en llegar?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionGarantias">
                    <div class="accordion-body">
                        El envío de los pedidos se realizar por medio de una empresa externa, especialista en logística. En el Gran Áreas Metropolitana los tiempos establecidos son de 24 a 48 horas hábiles y en Área Rural de 48 a 72 horas hábiles. Sábados y Domingos, así como días
festivos por ley, se consideran no hábiles
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        
    </body>
</html>

