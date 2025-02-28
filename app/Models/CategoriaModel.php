<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $fillable = [
        'nombre_categoria',
    ];

    public function productos()
    {
        return $this->hasMany(ProductoModel::class);
    }
}
