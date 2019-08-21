<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class AsignaturaTutor extends Model
{
    protected $table = 'asignatura_tutores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_asignatura', 'id_tutor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Tutor - AsignaturaTutor (1 - M)
    public function tutores()
    {
        return $this->belongsTo('App\Models\Relacional\Tutor', 'id_tutor');
    }

    // Relación: Asignatura - AsignaturaTutor (1 - M)
    public function asignaturas()
    {
        return $this->belongsTo('App\Models\Relacional\Asignatura', 'id_asignatura');
    }

    // Relación: AsignaturaTutor - Tutoria (1 - M)
    public function tutorias()
    {
        return $this->hasMany('App\Models\Relacional\Tutoria');
    }

}
