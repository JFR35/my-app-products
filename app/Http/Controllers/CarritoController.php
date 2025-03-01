<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarritoModel;
use App\Models\CarritoDetallesModel;

class CarritoController extends Controller
{
    // Funcion para agregar un producto al carrito de compras
    public function agregar(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');

        $carrito = CarritoModel::firstOrCreate(); 

        CarritoDetallesModel::create([
            'carrito_id' => $carrito->id,
            'producto_id' => $productoId,
            'cantidad' => $cantidad,
            'precio' => 0,
            'fecha_adicion' => now(),
        ]);
        // Redigir a la vista del carrito tras agregar un producto
        return redirect()->route('carrito.show'); 
    }

    // Funcion para mostrar el carrito de compras
    public function show()
    {
        $carrito = CarritoModel::first();
        $detalles = $carrito ? $carrito->productos : collect(); // Usa la relación productos()
        return view('carrito.show', compact('detalles'));
    }


}
