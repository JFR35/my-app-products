<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi app de bebidas - @yield('title', 'Página principal')</title>
    <meta name="description" content="@yield('description', 'Descripción de la página')">
    <meta name="keywords" content="@yield('keywords', 'palabras clave')">
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-white py-3 shadow-sm">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                        <path d="M13.111 8.177a2.989 2.989 0 0 0-3.91-3.91A2.989 2.989 0 0 0 5 10H3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V10h.51l9.383-7.323a.51.51 0 0 0-.068-.73zM12 1a1 1 0 0 1 1 1h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1a1 1 0 0 1 1-1h10z"/>
                    </svg>
                    <span class="ms-2">Mi app de bebidas</span>
                </a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('productos.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('carrito.show') }}">Carrito</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('sesion.index') }}">Iniciar Sesión</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </header>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Sobre nosotros</h5>
                    <p>Información sobre tu empresa o aplicación.</p>
                </div>
                <div class="col-md-3">
                    <h5>Enlaces útiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Síguenos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0">&copy; 2023 Mi app de bebidas. Todos los derechos reservados.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>