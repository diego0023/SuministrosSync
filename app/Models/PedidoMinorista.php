<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoMinorista extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_producto',
        'cantidad', 
        'total',
        'tienda',
        'fecha',
    ];

    public function producto(){
        return $this->belongsTo(Productos::class, 'id_producto');
    }
}
