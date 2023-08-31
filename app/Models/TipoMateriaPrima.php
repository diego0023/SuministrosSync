<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMateriaPrima extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function materiaPrima(){
        return $this->belogsTo(MateriaPrima::class);
    }
}
