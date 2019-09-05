<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Asignatura extends Model
{
    use CrudTrait;
    public $incrementing=false;
    protected $table = 'asignaturas';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id','nombre'
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
