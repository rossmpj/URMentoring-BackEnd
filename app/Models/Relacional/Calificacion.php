<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Calificacion extends Model
{
    use CrudTrait;
    protected $table = 'calificaciones';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comentario', 'valoracion', 'id_estudiante', 'id_tutor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Estudiante - Calificacion (1 - M)
    public function estudiantes()
    {
        return $this->belongsTo('App\Models\Relacional\Estudiante', 'id_estudiante');
    }

    // Relación: Tutor - Calificación (1 - M)
    public function tutores()
    {
        return $this->belongsTo('App\Models\Relacional\Tutor', 'id_tutor');
    }

}
