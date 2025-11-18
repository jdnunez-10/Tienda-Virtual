<x-guest-layout>
    <div style="margin-bottom: 1.5rem; color: #666; font-size: 0.95rem; text-align: center;">
        ¿Olvidaste tu contraseña? No hay problema. Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">Correo Electrónico</label>
            <div class="input-icon">
                <input id="email" 
                       type="email" 
                       name="email" 
                       class="form-control" 
                       value="{{ old('email') }}" 
                       placeholder="tu@email.com"
                       required 
                       autofocus>
                <i class="fas fa-envelope"></i>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-tech">
            <i class="fas fa-paper-plane"></i> Enviar Enlace de Recuperación
        </button>

        <div class="text-center-section">
            <a href="{{ route('login') }}" class="text-link">
                <i class="fas fa-arrow-left"></i> Volver al inicio de sesión
            </a>
        </div>
    </form>
</x-guest-layout>