<?php

use Illuminate\Database\Seeder;
use App\Tutor;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tutores')->delete() ;
    	Tutor::create([
        	'id' => 'T125465709',
        	'nombre' => 'Sandra',
        	'apellido'=>'Fuentes',
        	'sexo'=>'F',
			'correo' => 'saffw@hotmail.com',
			'telefono' => '0635664376',
			'fecha_nac' => '1990-03-22',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, tengo conocimientos variados en ciencias y matemáticas'
	    ]);
	    Tutor::create([
        	'id' => 'T175433246',
        	'nombre' => 'Cesar',
        	'apellido'=>'Sao',
        	'sexo'=>'M',
			'correo' => 'trerfw@hotmail.com',
			'telefono' => '0635664376',
			'fecha_nac' => '1990-03-22',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Enseñar es mi pasión, soy muy bueno explicando en poco tiempo'
	    ]);
	    Tutor::create([
        	'id' => 'T034578101',
        	'nombre' => 'Javier',
        	'apellido'=>'Acebo',
        	'sexo'=>'M',
			'correo' => 'tneis@hotmail.com',
			'telefono' => '0139764376',
			'fecha_nac' => '1988-10-18',
			'ciudad' => 'Manta',
			'presentacion' => 'Tengo el don de enseñar, y soy muy didáctico al momento de dar una explicación'
	    ]);
	    Tutor::create([
        	'id' => 'T784563984',
        	'nombre' => 'Stefania',
        	'apellido'=>'Morales',
        	'sexo'=>'F',
			'correo' => 'stemf@hotmail.com',
			'telefono' => '0335664376',
			'fecha_nac' => '1980-07-14',
			'ciudad' => 'Esmeraldas',
			'presentacion' => 'Soy doctora en Ciencias, y me gustan las matemáticas.'
	    ]);
	    Tutor::create([
        	'id' => 'T098784562',
        	'nombre' => 'Douglas',
        	'apellido'=>'Miranda',
        	'sexo'=>'M',
			'correo' => 'dbancg@hotmail.com',
			'telefono' => '0978664377',
			'fecha_nac' => '1991-06-02',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, estoy dispuesto a ayudarte con tus dudas en cualquier momento'
	    ]);
        
    }
}
