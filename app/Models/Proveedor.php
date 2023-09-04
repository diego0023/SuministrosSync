<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'nit', 
        'telefono',
        'direccion',
    ];
    public function materiaPrima(){
        return $this->belogsTo(MateriaPrima::class);
    }
}
