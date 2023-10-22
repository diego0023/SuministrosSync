<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioMayorista extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_producto',
        'cantidad',
    ];

    public function producto() 
    {
    return $this->belongsTo(Producto::class, 'id_producto'); 
    }
}
