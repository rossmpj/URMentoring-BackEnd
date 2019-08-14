<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'sexo', 'fecha_nac', 'correo', 'id_representante'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Representante - Estudiante (1 - M)
    public function representantes()
    {
        return $this->belongsTo('App\Models\Relacional\Representante', 'id_representante');
    }

    // Relación: Estudiante - Tutoria (1 - M)
    public function tutorias()
    {
        return $this->hasMany('App\Models\Relacional\Tutoria');
    }

    // Relación: Estudiante - Calificacion (1 - M)
    public function calificaciones()
    {
        return $this->hasMany('App\Models\Relacional\Calificacion');
    }
}
