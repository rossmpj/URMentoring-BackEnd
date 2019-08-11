<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoria extends Model
{
    protected $table = 'tutorias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'costo', 'estado', 'hora_inicio', 'hora_fin', 'tema', 'detalle', 'fecha', 'id_asignatura_tutor', 'id_estudiante'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Tutoria - PagoTutoria (1 - 1)
    public function pagoTutorias()
    {
        return $this->hasOne('App\PagoTutoria');
    }

    // Relación: Estudiante - Tutoria (1 - M)
    public function estudiantes()
    {
        return $this->belongsTo('App\Estudiante', 'id_estudiante');
    }

    // Relación: AsignaturaTutor - Tutoria (1 - M)
    public function asignaturaTutores()
    {
        return $this->belongsTo('App\AsignaturaTutor', 'id_asignatura_tutor');
    }

    // Relación: Tutoria - DocumentosRefuerzo (1 - M)
    public function documentosRefuerzos()
    {
        return $this->hasMany('App\DocumentosRefuerzo');
    }
}
