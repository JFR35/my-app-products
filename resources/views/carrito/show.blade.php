@extends('layouts.app')

@section('content')
    <h1>Carrito de compras</h1>

    @if (count($detalles) > 0)
        <table class="table mb-4">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Precio total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalles as $detalle)
                    <tr>
                        <td>{{ $detalle->nombre }}</td>
                        <td>{{ $detalle->pivot->cantidad }}</td>
                        <td>{{ number_format($detalle->precio, 2, ',', '.') }}€</td>
                        <td>{{ number_format($detalle->pivot->cantidad * $detalle->precio, 2, ',', '.') }}€</td>
                        <td>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total: {{ number_format($detalles->sum(function ($detalle) {
            return $detalle->pivot->cantidad * $detalle->precio;
        }), 2, ',', '.') }}€</p>
        <button class="btn btn-success">Finalizar compra</button>
    @else
        <p>El carrito está vacío.</p>
    @endif
@endsection