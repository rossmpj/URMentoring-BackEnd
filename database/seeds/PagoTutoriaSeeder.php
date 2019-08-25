<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\PagoTutoria;

class PagoTutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pago_tutorias')->delete() ;
        PagoTutoria::create([
        	'id_titular' => '4645454',
        	'numero_tarjeta' => '104855712',
        	'estado' => 'Pagada',
        	'fecha_expiracion_tarjeta' => '2019-12-12',
        	'id_tutoria' => 1,
        	'id_representante' => 'R094344345',
            'id_metodo_pago' => 'TARJET01'
        ]);
        PagoTutoria::create([
        	'id_titular' => '5674944',
        	'numero_tarjeta' => '894462852',
        	'estado' => 'Anulado',
        	'fecha_expiracion_tarjeta' => '2020-06-30',
        	'id_tutoria' => 2,
        	'id_representante' => 'R094354653',
            'id_metodo_pago' => 'PAY01'
        ]);
        PagoTutoria::create([
        	'id_titular' => '7945213',
        	'numero_tarjeta' => '458624785',
        	'estado' => 'Pagada',
        	'fecha_expiracion_tarjeta' => '2022-05-15',
        	'id_tutoria' => 3,
        	'id_representante' => 'R094256888',
            'id_metodo_pago' => 'TARJET01'
        ]);
        PagoTutoria::create([
        	'id_titular' => '44595826',
        	'numero_tarjeta' => '799524138',
        	'estado' => 'Pagada',
        	'fecha_expiracion_tarjeta' => '2023-08-25',
        	'id_tutoria' => 4,
        	'id_representante' => 'R092954357',
            'id_metodo_pago' => 'PAY01'
        ]);
        PagoTutoria::create([
        	'id_titular' => '487295826',
        	'numero_tarjeta' => '793354138',
        	'estado' => 'Anulado',
        	'fecha_expiracion_tarjeta' => '2020-07-15',
        	'id_tutoria' => 5,
        	'id_representante' => 'R096524657',
            'id_metodo_pago' => 'TARJET01'
        ]);

    }
}
