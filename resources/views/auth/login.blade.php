<!DOCTYPE html>
<html>
<head>
    <title>login System - Acceso</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/auth-style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-main">
            <input type="checkbox" id="auth-chk" aria-hidden="true">

            <!-- Formulario de Registro -->
            <div class="auth-signup">
                <form method="POST" action="{{ route('register') }}" class="auth-form">
                    @csrf
                    <label for="auth-chk" aria-hidden="true">Registro</label>
                    <input type="text" name="name" placeholder="Nombre completo" required value="{{ old('name') }}">
                    @error('name') <div class="auth-error">{{ $message }}</div> @enderror
                    
                    <input type="email" name="email" placeholder="Correo electrónico" required value="{{ old('email') }}">
                    @error('email') <div class="auth-error">{{ $message }}</div> @enderror
                    
                    <input type="password" name="password" placeholder="Contraseña" required>
                    @error('password') <div class="auth-error">{{ $message }}</div> @enderror
                    
                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
                    
                    <button type="submit">Registrarse</button>
                </form>
            </div>

            <!-- Formulario de Login -->
            <div class="auth-login">
                <form method="POST" action="{{ route('login') }}" class="auth-form">
                    @csrf
                    <label for="auth-chk" aria-hidden="true">Acceder</label>
                    
                    <input type="email" name="email" placeholder="Correo electrónico" required value="{{ old('email') }}">
                    @error('email') <div class="auth-error">{{ $message }}</div> @enderror
                    
                    <input type="password" name="password" placeholder="Contraseña" required>
                    @error('password') <div class="auth-error">{{ $message }}</div> @enderror
                    
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Mostrar mensajes de estado -->
    @if (session('status'))
        <script>
            alert("{{ session('status') }}");
        </script>
    @endif
</body>
</html>