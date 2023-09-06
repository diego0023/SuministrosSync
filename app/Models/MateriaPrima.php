<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'precio_unidad',
        'lugar_almacenamiento',
        'descripcion',
        'id_proveedor',
        'id_tipo',
    ];
    public function proveedores() {
        return $this->hasMany(Proveedor::class);
    }
    public function tipos() {
        return $this->hasMany(TipoMateriaPrima::class);
    }
    public function caracteristicas(){
        return $this->belongsToMany(CaracteristicaMateriaPrima::class, 'caracteristica_materias');
    }


    public function ordenes()
    {
        return $this->hasMany(OrdenAlmacenamiento::class);

    public function inventariobodega(){
        return $this->hasOne(InventarioPlanta::class);
    }
    public function inventarioplanta(){
        return $this->hasOne(InventarioPlanta::class);
    }
      
}
