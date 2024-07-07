<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'codigo';

    public function ejemplares()
    {
        return $this->belongsToMany(Ejemplares::class, 'usuario_ejemplar', 'usuario_codigo', 'ejemplar_codigo')->withTimestamps();
    }
}
