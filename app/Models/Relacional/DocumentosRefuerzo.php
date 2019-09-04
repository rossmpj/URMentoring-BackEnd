<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class DocumentosRefuerzo extends Model
{
    protected $table = 'documentos_refuerzos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id','descripcion', 'comentario', 'id_tutoria'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Tutoria - DocumentosRefuerzo (1 - M)
    public function tutorias()
    {
        return $this->belongsTo('App\Models\Relacional\Tutoria', 'id_tutoria');
    }

}
