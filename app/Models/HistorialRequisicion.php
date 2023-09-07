<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialRequisicion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_requisicion',
        'descripcion',
    ];

    public function requisicion()
    {
        return $this->belongsTo(Requisicion::class, 'id_requisicion');
    }
}
