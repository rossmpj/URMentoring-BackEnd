<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class DocumentosRefuerzo extends Model
{
    use CrudTrait;
    protected $table = 'documentos_refuerzos';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'comentario', 'id_tutoria'
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
