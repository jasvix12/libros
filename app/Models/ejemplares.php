<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejemplares extends Model
{
    use HasFactory;

    protected $table = 'ejemplares';
    protected $primaryKey = 'codigo';

    public function libro()
    {
        return $this->belongsTo(libros::class, 'libro_codigo', 'codigo');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuarios::class, 'usuario_ejemplar', 'ejemplar_codigo', 'usuario_codigo')->withTimestamps();
    }
}
