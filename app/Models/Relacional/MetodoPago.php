<?php

namespace App\Models\Relacional;

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
        '_id','tipo', 'detalle'
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
        return $this->hasOne('App\Models\Relacional\PagoTutoria');
    }

}
