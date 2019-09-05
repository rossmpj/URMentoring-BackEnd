<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Tutor extends Model
{
    use CrudTrait;
    public $incrementing=false;
    protected $table = 'tutores';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'correo', 'sexo', 'telefono', 'ciudad', 'fecha_nac', 'presentacion'
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
