<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioBodega extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_materia_prima',
        'cantidad',
    ];
    public function materiaprima(){
        return $this->belongsTo(MateriaPrima::class, 'id_materia_prima');
    }
}
