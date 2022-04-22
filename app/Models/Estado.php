<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = [
        'pais_id',
        'codigo',
        'nombre',
    ];

    protected $table = "estado";

    public function ciudad()
    {
        return $this->hasMany(Ciudad::class);
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}
