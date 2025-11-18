<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name" class="form-label">Nombre Completo</label>
            <div class="input-icon">
                <input id="name" 
                       type="text" 
                       name="name" 
                       class="form-control" 
                       value="{{ old('name') }}" 
                       placeholder="Juan Pérez"
                       required 
                       autofocus 
                       autocomplete="name">
                <i class="fas fa-user"></i>
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

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
                       autocomplete="username">
                <i class="fas fa-envelope"></i>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-icon">
                <input id="password" 
                       type="password" 
                       name="password" 
                       class="form-control"
                       placeholder="Mínimo 8 caracteres" 
                       required 
                       autocomplete="new-password">
                <i class="fas fa-lock"></i>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <div class="input-icon">
                <input id="password_confirmation" 
                       type="password" 
                       name="password_confirmation" 
                       class="form-control"
                       placeholder="Repite tu contraseña" 
                       required 
                       autocomplete="new-password">
                <i class="fas fa-lock"></i>
            </div>
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-tech">
            <i class="fas fa-user-plus"></i> Crear Cuenta
        </button>

        <div class="text-center-section">
            ¿Ya tienes cuenta? 
            <a href="{{ route('login') }}" class="text-link">
                Inicia sesión aquí
            </a>
        </div>

        <div style="margin-top: 1.5rem; font-size: 0.8rem; color: #666; text-align: center;">
            Al registrarte, aceptas nuestros 
            <a href="#" class="text-link">Términos de Servicio</a> y 
            <a href="#" class="text-link">Política de Privacidad</a>
        </div>
    </form>
</x-guest-layout>