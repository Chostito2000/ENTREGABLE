<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo_actividad', 
    ];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
