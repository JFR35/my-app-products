@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4"> <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre_producto }}" class="img-fluid rounded">
        </div>
        <div class="col-md-4 mt-4"> <h2>{{ $producto->nombre_producto }}</h2>
            <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p><strong>Precio:</strong> {{ number_format($producto->precio, 2, ',', '.') }}€</p>
            <p><strong>Categoría:</strong> {{ $producto->categoria->nombre_categoria ?? 'Sin categoría' }}</p>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>

@endsection