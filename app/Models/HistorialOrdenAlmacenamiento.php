<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialOrdenAlmacenamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_orden_almacenamientos',
        'descripcion',
    ];

    public function ordenalmacenamiento()
    {
        return $this->belongsTo(OrdenAlmacenamiento::class, 'id_orden_almacenamientos');
    }
}
