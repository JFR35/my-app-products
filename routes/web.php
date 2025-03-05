<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('productos.index'); // Redirige la raíz a productos.index
});

Route::prefix('productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/{id}', [ProductoController::class, 'show'])->name('productos.show');
});

Route::prefix('carrito')->group(function () {
    Route::post('/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::get('/show', [CarritoController::class, 'show'])->name('carrito.show');
    Route::delete('/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
});

// Este es un comentario para borrar y probar la PULL REQUEST
