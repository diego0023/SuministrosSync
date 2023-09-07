<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenAlmacenamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_materia_prima',
        'id_usuario',
        'fecha_recepcion',
        'cantidad',
        'evaluada',
        'aprobada',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function materiaprima()
    {
        return $this->belongsTo(MateriaPrima::class, 'id_materia_prima');
    }
}
