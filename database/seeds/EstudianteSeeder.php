<?php

use Illuminate\Database\Seeder;
use App\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')->delete() ;
        Estudiante::create([
            'id' => 'E031548795',
            'nombre' => 'Juan',
            'apellido' => 'Asanza',
            'sexo' => 'M',
            'fecha_nac' => '2009-03-30',
            'correo' => 'vazn@outlook.com',
            'id_representante' => 'R094344345',
        ]);
        Estudiante::create([
            'id' => 'E17536842',
            'nombre' => 'Victor',
            'apellido' => 'Mazzini',
            'sexo' => 'M',
            'fecha_nac' => '2007-07-05',
            'correo' => 'vmazz@outlook.com',
            'id_representante' => 'R094354653',
        ]);
        Estudiante::create([
            'id' => 'E032587419',
            'nombre' => 'Carla',
            'apellido' => 'Dubois',
            'sexo' => 'F',
            'fecha_nac' => '2005-06-17',
            'correo' => 'cmaern@outlook.com',
            'id_representante' => 'R094256888',
        ]);
        Estudiante::create([
            'id' => 'E920135782',
            'nombre' => 'Kelly',
            'apellido' => 'Salas',
            'sexo' => 'F',
            'fecha_nac' => '2008-09-27',
            'correo' => 'kalzn@outlook.com',
            'id_representante' => 'R092954357',
        ]);
        Estudiante::create([
            'id' => 'E013256984',
            'nombre' => 'Lili',
            'apellido' => 'Villon',
            'sexo' => 'F',
            'fecha_nac' => '2011-05-14',
            'correo' => 'lvlill@outlook.com',
            'id_representante' => 'R096524657',
        ]);
        Estudiante::create([
            'id' => 'E013256985',
            'nombre' => 'Daniel',
            'apellido' => 'Villon',
            'sexo' => 'M',
            'fecha_nac' => '2010-12-30',
            'correo' => 'dapmn@outlook.com',
            'id_representante' => 'R096524657',
        ]);
    }
}
