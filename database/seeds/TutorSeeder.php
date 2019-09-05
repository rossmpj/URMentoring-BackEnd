<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\Tutor;

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
        	'_id' => 'T125465709',
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
        	'_id' => 'T175433246',
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
        	'_id' => 'T034578101',
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
        	'_id' => 'T784563984',
        	'nombre' => 'Stefania',
        	'apellido'=>'Morales',
        	'sexo'=>'F',
			'correo' => 'stemf@hotmail.com',
			'telefono' => '0335664376',
			'fecha_nac' => '1996-07-14',
			'ciudad' => 'Esmeraldas',
			'presentacion' => 'Soy doctora en Ciencias, y me gustan las matemáticas.'
	    ]);
	    Tutor::create([
        	'_id' => 'T098784562',
        	'nombre' => 'Douglas',
        	'apellido'=>'Miranda',
        	'sexo'=>'M',
			'correo' => 'dbancg@hotmail.com',
			'telefono' => '0978664377',
			'fecha_nac' => '2000-06-02',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, estoy dispuesto a ayudarte con tus dudas en cualquier momento'
	    ]);
	    Tutor::create([
        	'_id' => 'T454465709',
        	'nombre' => 'Sara',
        	'apellido'=>'Govea',
        	'sexo'=>'F',
			'correo' => 'safgfw@hotmail.com',
			'telefono' => '0642664376',
			'fecha_nac' => '2000-03-22',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, tengo conocimientos variados en ciencias y matemáticas'
	    ]);
	    Tutor::create([
        	'_id' => 'T175433247',
        	'nombre' => 'Carlos',
        	'apellido'=>'Salcedo',
        	'sexo'=>'M',
			'correo' => 'csald@hotmail.com',
			'telefono' => '0635444376',
			'fecha_nac' => '1963-02-12',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Enseñar es mi pasión, soy muy bueno explicando en poco tiempo'
	    ]);
	    Tutor::create([
        	'_id' => 'T034548101',
        	'nombre' => 'Xavier',
        	'apellido'=>'Anchundia',
        	'sexo'=>'M',
			'correo' => 'jaanch@hotmail.com',
			'telefono' => '0139764376',
			'fecha_nac' => '1999-11-18',
			'ciudad' => 'Esmeraldas',
			'presentacion' => 'Tengo el don de enseñar, y soy muy didáctico al momento de dar una explicación'
	    ]);
	    Tutor::create([
        	'_id' => 'T784583984',
        	'nombre' => 'Sandy',
        	'apellido'=>'Morales',
        	'sexo'=>'F',
			'correo' => 'saadn@hotmail.com',
			'telefono' => '0115664376',
			'fecha_nac' => '1989-07-14',
			'ciudad' => 'Esmeraldas',
			'presentacion' => 'Soy doctora en Ciencias, y me gustan las matemáticas.'
	    ]);
	    Tutor::create([
        	'_id' => 'T098334562',
        	'nombre' => 'Alessandro',
        	'apellido'=>'Miranda',
        	'sexo'=>'M',
			'correo' => 'almir@hotmail.com',
			'telefono' => '0998664377',
			'fecha_nac' => '2000-06-02',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, estoy dispuesto a ayudarte con tus dudas en cualquier momento'
	    ]);
	    Tutor::create([
        	'_id' => 'T122225709',
        	'nombre' => 'Carmen',
        	'apellido'=>'Contreras',
        	'sexo'=>'F',
			'correo' => 'carcnt@hotmail.com',
			'telefono' => '0635664376',
			'fecha_nac' => '1950-03-22',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, tengo conocimientos variados en ciencias y matemáticas'
	    ]);
	    Tutor::create([
        	'_id' => 'T172333246',
        	'nombre' => 'Mercedes',
        	'apellido'=>'Vega',
        	'sexo'=>'M',
			'correo' => 'mercvg@hotmail.com',
			'telefono' => '0935664376',
			'fecha_nac' => '1990-03-22',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Enseñar es mi pasión, soy muy bueno explicando en poco tiempo'
	    ]);
	    Tutor::create([
        	'_id' => 'T034888101',
        	'nombre' => 'Javier',
        	'apellido'=>'Brito',
        	'sexo'=>'M',
			'correo' => 'jbrto@hotmail.com',
			'telefono' => '0139764376',
			'fecha_nac' => '1993-10-18',
			'ciudad' => 'Manta',
			'presentacion' => 'Tengo el don de enseñar, y soy muy didáctico al momento de dar una explicación'
	    ]);
	    Tutor::create([
        	'_id' => 'T784993984',
        	'nombre' => 'Liliana',
        	'apellido'=>'Garcia',
        	'sexo'=>'F',
			'correo' => 'lilox@hotmail.com',
			'telefono' => '0995664376',
			'fecha_nac' => '1993-07-14',
			'ciudad' => 'Esmeraldas',
			'presentacion' => 'Soy doctora en Ciencias, y me gustan las matemáticas.'
	    ]);
	    Tutor::create([
        	'_id' => 'T098004562',
        	'nombre' => 'Samuel',
        	'apellido'=>'Larrosa',
        	'sexo'=>'M',
			'correo' => 'saaaml@hotmail.com',
			'telefono' => '0998664377',
			'fecha_nac' => '1989-06-02',
			'ciudad' => 'Guayaquil',
			'presentacion' => 'Me gusta mucho enseñar, estoy dispuesto a ayudarte con tus dudas en cualquier momento'
	    ]);
        
    }
}
