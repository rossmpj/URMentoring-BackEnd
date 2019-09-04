<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id','nombre', 'apellido', 'correo', 'sexo', 'telefono', 'ciudad', 'fecha_nac', 'presentacion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Tutor - Calificación (1 - M)
    public function calificaciones()
    {
        return $this->hasMany('App\Models\Relacional\Calificacion');
    }

    // Relación: Tutor - FormacionTutor (1 - 1)
    public function formacionTutores()
    {
        return $this->hasOne('App\Models\Relacional\FormacionTutor');
    }

    // Relación: Tutor - AsignaturaTutor (1 - M)
    public function asignaturaTutores()
    {
        return $this->hasMany('App\Models\Relacional\AsignaturaTutor');
    }
}
