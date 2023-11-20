<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'comentario',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
