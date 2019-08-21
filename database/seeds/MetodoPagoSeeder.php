<?php

use Illuminate\Database\Seeder;
use App\MetodoPago;

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
        	'id' => 'TARJET01',
        	'tipo' => 'Débito',
        	'detalle'=>'Pago con tarjeta de débito'
	    ]);
	    MetodoPago::create([
        	'id' => 'PAY01',
        	'tipo' => 'Paypal',
        	'detalle'=>'Pago por internet'
	    ]);
        
    }
}
