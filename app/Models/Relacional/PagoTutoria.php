<?php

namespace App\Models\Relacional;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class PagoTutoria extends Model
{
    use CrudTrait;
    protected $table = 'pago_tutorias';
    protected $primaryKey = '_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_titular', 'numero_tarjeta', 'estado', 'fecha_expiracion_tarjeta', 'id_tutoria', 'id_representante', 'id_metodo_pago'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Representante - PagoTutoria (1 - M)
    public function representantes()
    {
        return $this->belongsTo('App\Models\Relacional\Representante', 'id_representante');
    }

    // Relación: PagoTutoria - MetodoPago (1 - 1)
    public function metodoPagos()
    {
        return $this->belongsTo('App\Models\Relacional\MetodoPago', 'id_metodo_pago');
    }

    // Relación: PagoTutoria - Tutoria (1 - 1)
    public function tutorias()
    {
        return $this->belongsTo('App\Models\Relacional\Tutoria', 'id_tutoria');
    }

}
