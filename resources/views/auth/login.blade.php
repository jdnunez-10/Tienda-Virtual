<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
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
                       autofocus 
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
                       placeholder="••••••••" 
                       required 
                       autocomplete="current-password">
                <i class="fas fa-lock"></i>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-group">
            <div class="checkbox-container">
                <input id="remember_me" 
                       type="checkbox" 
                       name="remember">
                <label for="remember_me">
                    Recuérdame
                </label>
            </div>
        </div>

        <div class="flex-between" style="margin-bottom: 1.5rem;">
            @if (Route::has('password.request'))
                <a class="text-link" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif
        </div>

        <button type="submit" class="btn-tech">
            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
        </button>

        <div class="text-center-section">
            ¿No tienes cuenta? 
            <a href="{{ route('register') }}" class="text-link">
                Regístrate aquí
            </a>
        </div>
    </form>
</x-guest-layout>