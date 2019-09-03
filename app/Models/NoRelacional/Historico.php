<?php

namespace App\Models\NoRelacional;

use Jenssegers\Mongodb\Eloquent\Model;

class Historico extends Model
{
    protected $connection = 'mongodb';	
    protected $collection = 'historico'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [				
    	'id_tutor', 'nombre', 'apellido', 'sexo', 'correo_electronico', 'telefono', 'fecha_nacimiento', 'ciudad', 
    	'presentacion', 'nivel_estudios', 'experiencia', 'profesion', 'id_asignatura', 'nombre_asignatura'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];
}