<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoDetallesModel extends Model
{
    protected $table = 'carrito_productos';
    protected $fillable = [
        'carrito_id',
        'producto_id', // Asegúrate de que este sea el nombre correcto
        'cantidad',
        'precio',
        'fecha_adicion',
    ];

    public function producto()
    {
        return $this->belongsTo(ProductoModel::class, 'producto_id'); // Usa 'producto_id'
    }

    public function carrito()
    {
        return $this->belongsTo(CarritoModel::class, 'carrito_id');
    }
}