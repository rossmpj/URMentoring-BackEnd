<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    protected $table = 'metodo_pagos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo', 'detalle'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: PagoTutoria - MetodoPago (1 - 1)
    public function pagoTutorias()
    {
        return $this->hasOne('App\PagoTutoria');
    }

}
