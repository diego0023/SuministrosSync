<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenFabricacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'descripcion', 
    ];

    public function producto() {
        return $this->belongsToMany(Producto::class);
    }
}
