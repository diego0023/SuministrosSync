<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = [
        'id_producto',
        'id_orden_fabricacions',
        'cantidad',
    ];
}
