<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
    @vite('resources/css/app.css')
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <a class="navbar-brand" href="#">Mi app de bebidas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('productos.index') }}">Volver a Productos</a>
                </li>
                {{-- Si el usuario está autenticado, mostrar el enlace para cerrar sesión 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sesion.index') }}">Iniciar Sesión</a>
                </li>
                --}}
            </ul>
        </div>
    </nav>
    
    <div class="container">  {{-- Contenedor principal para el contenido --}}
        @yield('content')  {{-- Aquí se insertará el contenido de las vistas --}}
    </div>

    <footer class="bg-dark text-white py-2 -mt-2">
        <div class="container">
            <p class="text-center mb-0">Mi app de bebidas.</p>
        </div>
    </footer>
    
    @vite('resources/js/app.js')
</body>
</html>