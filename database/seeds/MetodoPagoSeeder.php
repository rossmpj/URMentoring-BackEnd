<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\MetodoPago;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('metodo_pagos')->delete() ;
    	MetodoPago::create([
        	'_id' => 'TARJET01',
        	'tipo' => 'Débito',
        	'detalle'=>'Pago con tarjeta de débito'
	    ]);
	    MetodoPago::create([
        	'_id' => 'PAY01',
        	'tipo' => 'Paypal',
        	'detalle'=>'Pago por internet'
	    ]);
        
    }
}
