<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;

    
    use HasFactory;

    protected $table = 'libros';
    protected $primaryKey = 'codigo';

    protected $fillable = [
        'titulo', 'ISBN', 'editorial', 'paginas'
    ];
}
