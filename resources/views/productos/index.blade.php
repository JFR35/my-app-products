@extends('layouts.app')

@section('content')
   
    <form action="{{ route('productos.index') }}" method="GET" class="mb-4" id="form-buscar">
        @csrf
        <div class="input-group">
            <input type="text" name="search" placeholder="Buscar productos..." value="{{ $query ?? '' }}" class="form-control form-control-sm" aria-label="Buscar producto">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="bi bi-search"></i> </button>
            <button type="button" class="btn btn-secondary btn-sm" = '';">Limpiar</button>
        </div>
    </form>

    <div class="row" id="productos">
        @forelse ($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">{{ \Str::limit($producto->descripcion, 60) }}</p>
                        <p class="card-text"><strong>{{ number_format($producto->precio, 2, ',', '.') }}€</strong></p>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('productos.show', $producto) }}" class="btn btn-primary">Ver Detalles</a>

                            <form action="{{ route('carrito.agregar') }}" method="POST" class="d-flex align-items-center">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                <input type="number" name="cantidad" value="1" min="1" class="form-control me-2" style="width: 80px;">
                                <button type="submit" class="btn btn-success">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No hay productos disponibles.</p> 
            </div>
        @endforelse
    </div>

    @push('scripts')
        @vite('resources/js/app.js')
    @endpush
@endsection