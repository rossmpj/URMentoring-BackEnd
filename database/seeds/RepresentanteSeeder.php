<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\Representante;

class RepresentanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('representantes')->delete() ;
        Representante::create([
        	'_id' => 'R094344345',
        	'nombre' => 'Sam',
        	'apellido'=>'Zavala',
			'correo' => 'saza@gmail.com',
			'sexo'=>'F',
			'telefono' => '0953456643',
			'ciudad' => 'Guayaquil',
			'fecha_nac' => '1990-08-23'
	 	]);
        Representante::create([
        	'_id' => 'R094354653',
        	'nombre' => 'Lety',
        	'apellido'=>'Correa',
			'correo' => 'lect@gmail.com',
			'sexo'=>'F',
			'telefono' => '0953452641',
			'ciudad' => 'Cuenca',
			'fecha_nac' => '1990-03-07'
	 	]);
        Representante::create([
        	'_id' => 'R094256888',
        	'nombre' => 'Rodrigo',
        	'apellido'=>'Dubois',
			'correo' => 'jalal@gmail.com',
			'sexo'=>'M',
			'telefono' => '0915336643',
			'ciudad' => 'Quito',
			'fecha_nac' => '1960-08-08'
	 	]);
        Representante::create([
        	'_id' => 'R092954357',
        	'nombre' => 'Nathaly',
        	'apellido'=>'Paz',
			'correo' => 'noparty@gmail.com',
			'sexo'=>'F',
			'telefono' => '0953450987',
			'ciudad' => 'Manta',
			'fecha_nac' => '1957-12-26'
	 	]);
        Representante::create([
        	'_id' => 'R096524657',
        	'nombre' => 'Carlos',
        	'apellido'=>'Villon',
			'correo' => 'theewrt@gmail.com',
			'sexo'=>'M',
			'telefono' => '0953464356',
			'ciudad' => 'Quito',
			'fecha_nac' => '1969-01-13'
	 	]);
    }
}
