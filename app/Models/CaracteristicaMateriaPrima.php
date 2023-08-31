<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaMateriaPrima extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'valor_min',
        'valor_max',
    ];
    protected function materiaprimas(){
        return $this->belongsToMany(MateriaPrima::class, 'caracteristica_materias');
    }
}
