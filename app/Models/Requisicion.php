<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_materia_prima',
        'id_usuario',
        'fecha_pedido',
        'fecha_entrega',
        'cantidad',
        'evaluada',
        'denegada',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function materiaprima()
    {
        return $this->belongsTo(MateriaPrima::class, 'id_materia_prima');
    }

    public function historialrequisicion()
    {
        return $this->hasMany(HistorialRequisicion::class, 'id_requisicion');
    }
}
