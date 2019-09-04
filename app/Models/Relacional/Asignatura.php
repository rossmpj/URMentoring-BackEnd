<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Asignatura - AsignaturaTutor (1 - M)
    public function asignaturaTutores()
    {
        return $this->hasMany('App\Models\Relacional\AsignaturaTutor');
    }
    
}
