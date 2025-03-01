<?php

use App\Http\Controllers\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;


Route::get('/productos', [Producto::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [Producto::class, 'show'])->name('productos.show');

Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito/show', [CarritoController::class, 'show'])->name('carrito.show');