<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <span class="text-sm text-gray-600">Bienvenido, {{ Auth::user()->name }}!</span>
        </div>
    </x-slot>

    <style>
        :root {
            --tech-blue: #0066CC;
            --tech-dark: #1a1a1a;
            --tech-gray: #f8f9fa;
            --tech-accent: #00ff88;
            --tech-orange: #ff6b35;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border-left: 4px solid var(--tech-blue);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--tech-dark);
            margin: 0.5rem 0;
        }

        .stat-label {
            color: #666;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .quick-action-btn {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            display: block;
            text-decoration: none;
            color: var(--tech-dark);
        }

        .quick-action-btn:hover {
            border-color: var(--tech-blue);
            background: #f0f7ff;
            transform: translateY(-3px);
        }

        .quick-action-icon {
            font-size: 2rem;
            color: var(--tech-blue);
            margin-bottom: 0.5rem;
        }

        .recent-order-card {
            background: white;
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
        }

        .recent-order-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .order-status {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-processing {
            background: #cfe2ff;
            color: #084298;
        }

        .status-completed {
            background: #d1e7dd;
            color: #0f5132;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--tech-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
    </style>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Pedidos -->
                <div class="stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="stat-label">Total Pedidos</p>
                            <h3 class="stat-value">12</h3>
                            <p class="text-green-600 text-sm font-medium">
                                <i class="fas fa-arrow-up"></i> +2 este mes
                            </p>
                        </div>
                        <div class="stat-icon" style="background: #e3f2fd;">
                            <i class="fas fa-shopping-bag" style="color: var(--tech-blue);"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Gastado -->
                <div class="stat-card" style="border-left-color: var(--tech-accent);">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="stat-label">Total Gastado</p>
                            <h3 class="stat-value">$2,450</h3>
                            <p class="text-gray-600 text-sm font-medium">
                                En 6 meses
                            </p>
                        </div>
                        <div class="stat-icon" style="background: #e8f5e9;">
                            <i class="fas fa-dollar-sign" style="color: var(--tech-accent);"></i>
                        </div>
                    </div>
                </div>

                <!-- Productos Favoritos -->
                <div class="stat-card" style="border-left-color: var(--tech-orange);">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="stat-label">Lista de Deseos</p>
                            <h3 class="stat-value">8</h3>
                            <p class="text-gray-600 text-sm font-medium">
                                Productos guardados
                            </p>
                        </div>
                        <div class="stat-icon" style="background: #ffe8e0;">
                            <i class="fas fa-heart" style="color: var(--tech-orange);"></i>
                        </div>
                    </div>
                </div>

                <!-- Puntos -->
                <div class="stat-card" style="border-left-color: #9c27b0;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="stat-label">Puntos TechZone</p>
                            <h3 class="stat-value">520</h3>
                            <p class="text-gray-600 text-sm font-medium">
                                = $52.00 en descuentos
                            </p>
                        </div>
                        <div class="stat-icon" style="background: #f3e5f5;">
                            <i class="fas fa-star" style="color: #9c27b0;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8 p-6">
                <h3 class="section-title">
                    <i class="fas fa-bolt"></i>
                    Acciones Rápidas
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="{{ route('productos') }}" class="quick-action-btn">
                        <div class="quick-action-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <p class="font-semibold">Seguir Comprando</p>
                    </a>

                    <a href="#" class="quick-action-btn">
                        <div class="quick-action-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <p class="font-semibold">Mis Pedidos</p>
                    </a>

                    <a href="#" class="quick-action-btn">
                        <div class="quick-action-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <p class="font-semibold">Mis Favoritos</p>
                    </a>

                    <a href="{{ route('profile.edit') }}" class="quick-action-btn">
                        <div class="quick-action-icon">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <p class="font-semibold">Mi Perfil</p>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Orders -->
                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="section-title">
                        <i class="fas fa-clock"></i>
                        Pedidos Recientes
                    </h3>

                    <!-- Order Item 1 -->
                    <div class="recent-order-card">
                        <div class="flex-shrink-0">
                            <img src="https://via.placeholder.com/80" alt="Producto" class="w-20 h-20 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-gray-800">iPhone 15 Pro Max</h4>
                                    <p class="text-sm text-gray-600">Pedido #12345</p>
                                    <p class="text-sm text-gray-500 mt-1">15 Nov 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-lg" style="color: var(--tech-blue);">$1,299.00</p>
                                    <span class="order-status status-completed">Entregado</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Item 2 -->
                    <div class="recent-order-card">
                        <div class="flex-shrink-0">
                            <img src="https://via.placeholder.com/80" alt="Producto" class="w-20 h-20 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-gray-800">MacBook Pro 14"</h4>
                                    <p class="text-sm text-gray-600">Pedido #12344</p>
                                    <p class="text-sm text-gray-500 mt-1">10 Nov 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-lg" style="color: var(--tech-blue);">$2,499.00</p>
                                    <span class="order-status status-processing">En camino</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Item 3 -->
                    <div class="recent-order-card">
                        <div class="flex-shrink-0">
                            <img src="https://via.placeholder.com/80" alt="Producto" class="w-20 h-20 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-gray-800">AirPods Pro 2</h4>
                                    <p class="text-sm text-gray-600">Pedido #12343</p>
                                    <p class="text-sm text-gray-500 mt-1">5 Nov 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-lg" style="color: var(--tech-blue);">$249.00</p>
                                    <span class="order-status status-pending">Procesando</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                            Ver todos los pedidos <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Profile Summary -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="section-title">
                            <i class="fas fa-user"></i>
                            Mi Perfil
                        </h3>
                        <div class="text-center mb-4">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <h4 class="font-semibold text-lg mt-3">{{ Auth::user()->name }}</h4>
                            <p class="text-gray-600 text-sm">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Miembro desde:</span>
                                <span class="font-medium">{{ Auth::user()->created_at->format('M Y') }}</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Nivel:</span>
                                <span class="font-medium text-yellow-600">⭐ Gold</span>
                            </div>
                        </div>
                        <a href="{{ route('profile.edit') }}" class="mt-4 block w-full text-center py-2 px-4 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all font-medium">
                            Editar Perfil
                        </a>
                    </div>

                    <!-- Promo Banner -->
                    <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg p-6 text-white shadow-lg">
                        <h4 class="font-bold text-xl mb-2">🎉 Oferta Especial</h4>
                        <p class="text-blue-100 text-sm mb-4">Obtén 20% de descuento en tu próxima compra de laptops</p>
                        <a href="{{ route('ofertas') }}" class="block w-full text-center py-2 px-4 bg-white text-blue-600 rounded-lg hover:bg-blue-50 transition-all font-semibold">
                            Ver Ofertas
                        </a>
                    </div>

                    <!-- Support -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="section-title">
                            <i class="fas fa-headset"></i>
                            Soporte
                        </h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors">
                                <i class="fas fa-question-circle w-5"></i>
                                <span class="ml-3">Centro de Ayuda</span>
                            </a>
                            <a href="{{ route('contacto') }}" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors">
                                <i class="fas fa-envelope w-5"></i>
                                <span class="ml-3">Contactar Soporte</span>
                            </a>
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors">
                                <i class="fas fa-comment-dots w-5"></i>
                                <span class="ml-3">Chat en Vivo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>