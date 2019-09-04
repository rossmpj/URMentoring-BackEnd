<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;

class FormacionTutor extends Model
{
    protected $table = 'formacion_tutores';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nivel_estudios', 'experiencia', 'profesion', 'id_tutor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];
    
    // Relación: Tutor - FormacionTutor (1 - 1)
    public function tutores()
    {
        return $this->belongsTo('App\Models\Relacional\Tutor', 'id_tutor');
    }

}
