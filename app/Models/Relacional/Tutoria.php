<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Tutoria extends Model
{
    use CrudTrait;
    protected $table = 'tutorias';
    protected $primaryKey = '_id';
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
        return $this->hasOne('App\Models\Relacional\PagoTutoria');
    }

    // Relación: Estudiante - Tutoria (1 - M)
    public function estudiantes()
    {
        return $this->belongsTo('App\Models\Relacional\Estudiante', 'id_estudiante');
    }

    // Relación: AsignaturaTutor - Tutoria (1 - M)
    public function asignaturaTutores()
    {
        return $this->belongsTo('App\Models\Relacional\AsignaturaTutor', 'id_asignatura_tutor');
    }

    // Relación: Tutoria - DocumentosRefuerzo (1 - M)
    public function documentosRefuerzos()
    {
        return $this->hasMany('App\Models\Relacional\DocumentosRefuerzo');
    }
}
