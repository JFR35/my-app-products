<?php

namespace App\Http\Controllers;
use App\Models\ProductoModel;
use Illuminate\Http\Request;

class Producto extends Controller
{
    public function index()
    {
        $productos = ProductoModel::all();
        return view('productos.index', compact('productos'));
    }

    public function show($id)
    {
        return view('productos.show', compact('producto'));
    }
}
