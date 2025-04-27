<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;
    protected $casts = [
        'fecha_limite' => 'datetime',
    ];
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_limite',
        'user_id',
    ];
}
