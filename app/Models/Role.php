<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name'];


    // Relacion roles/usuario 1 usuario tiene 1 rol
    public function users()
    {
        return $this->hasOne(User::class);
    }
}
