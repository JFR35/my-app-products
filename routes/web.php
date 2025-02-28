<?php

use App\Http\Controllers\Producto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/productos', [Producto::class, 'index'])->name('producto');
