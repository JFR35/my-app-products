<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class);
    }
}
