<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;

class Producto extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            $productos = ProductoModel::where('nombre_producto', 'LIKE', "%$query%")
                ->orWhere('descripcion', 'LIKE', "%$query%")
                ->get();
        } else {
            $productos = ProductoModel::all();
        }

        return view('productos.index', compact('productos', 'query'));
    }


    public function show($id)
    {
        $producto = ProductoModel::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
