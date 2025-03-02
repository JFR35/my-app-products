<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito'; // Especifica el nombre de la tabla
    protected $fillable = [
        'cliente_id', 
        'estado',
    ];

    // Relación uno a muchos
    public function productos()
    {
        return $this->belongsToMany(ProductoModel::class, 'carrito_productos', 'carrito_id', 'producto_id') 
                    ->withPivot('cantidad', 'precio', 'fecha_adicion');
    }
}