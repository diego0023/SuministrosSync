<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = [
        'nombre',
        'descripcion',
        'preciounidad',
        'cantidadencaja',
    ];

    public function inventariomayorista()
    {
     return $this->hasOne(InventarioMayorista::class);
    }

    public function pedidominorista(){
        return $this->hasMany(PedidoMinorista::class);
    }

    public function ordenfabricacion() {
        return $this->belongsToMany(OrdenFabricacion::class);
    }
}
