<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable = [
        'titulo', 'ano', 'precio'
    ];

    protected $hidden = [
    	'created_at', 'updated_at'
    ];
}
