<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioPlanta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_materia_prima',
        'cantidad',
    ];
    public function materiaprimas(){
        return $this->belongsTo(MateriaPrima::class);
    }
}
