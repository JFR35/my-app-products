@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="product-image">
                    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h2 class="product-title">{{ $producto->nombre }}</h2>
                    <p class="product-description">{{ $producto->descripcion }}</p>
                    <p class="product-price"><strong>{{ number_format($producto->precio, 2, ',', '.') }}€</strong></p>
                    <p class="product-category"><strong>Categoría:</strong> {{ $producto->categoria->nombre_categoria ?? 'Sin categoría' }}</p>
                    <div class="product-actions">
                        <form action="{{ route('carrito.agregar') }}" method="POST" class="d-flex align-items-center mb-3">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                            <input type="number" name="cantidad" value="1" min="1" class="form-control me-2" style="width: 80px;">
                            <button type="submit" class="btn btn-success">Agregar al carrito</button>
                        </form>
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection