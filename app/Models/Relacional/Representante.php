<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Representante extends Model
{
    use CrudTrait;
    public $incrementing=false;
    protected $table = 'representantes';    
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id','nombre', 'apellido', 'correo', 'sexo', 'telefono', 'ciudad', 'fecha_nac'
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
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Relacional\Estudiante');
    }

    // Relación: Representante - PagoTutoria (1 - M)
    public function pago_tutorias()
    {
        return $this->hasMany('App\Models\Relacional\PagoTutoria');
    }

}
