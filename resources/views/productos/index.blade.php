<!-- resources/views/productos/index.blade.php -->

@extends('layouts.app')

@section('content')
<!-- Formulario de búsqueda -->
<form action="{{ route('productos.index') }}" method="GET" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" placeholder="Buscar productos..." value="{{ $query ?? '' }}" class="form-control form-control-lg" aria-label="Buscar producto">
        <button type="submit" class="btn btn-primary btn-lg">Buscar Producto</button>
    </div>
</form>

<!-- Productos -->
<div class="row" id="productos">
    @forelse ($productos as $producto)
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Mostrar imagen -->
                <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ \Str::limit($producto->descripcion, 60) }}</p>
                    <p class="card-text"><strong>{{ number_format($producto->precio, 2, ',', '.') }}€</strong></p>
                    <a href="{{ route('productos.show', $producto) }}" class="btn btn-primary">Ver producto</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p>No hay productos disponibles.</p>
        </div>
    @endforelse
</div>

@endsection
