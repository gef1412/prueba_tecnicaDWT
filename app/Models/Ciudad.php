<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado_id',
        'nombre',
        'county',
        'latitud',
        'longitud'
    ];
    protected $table = "ciudad";

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
