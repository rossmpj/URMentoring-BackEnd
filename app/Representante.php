<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table = 'representantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'correo', 'sexo', 'telefono', 'ciudad', 'fecha_nac'
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
        return $this->hasMany('App\Estudiante');
    }

    // Relación: Representante - PagoTutoria (1 - M)
    public function pago_tutorias()
    {
        return $this->hasMany('App\PagoTutoria');
    }

}
