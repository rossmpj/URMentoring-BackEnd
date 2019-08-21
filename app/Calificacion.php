<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';

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
        return $this->belongsTo('App\Estudiante', 'id_estudiante');
    }

    // Relación: Tutor - Calificación (1 - M)
    public function tutores()
    {
        return $this->belongsTo('App\Tutor', 'id_tutor');
    }

}