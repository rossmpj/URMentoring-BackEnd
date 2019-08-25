<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\Asignatura;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->delete() ;
        Asignatura::create([
            'id' => 'ASIG01',
            'nombre' => 'Ciencias Naturales',
        ]);
        Asignatura::create([
            'id' => 'ASIG10',
            'nombre' => 'Química',
        ]);
        Asignatura::create([
            'id' => 'ASIG02',
            'nombre' => 'Matemáticas',
        ]);
        Asignatura::create([
            'id' => 'ASIG03',
            'nombre' => 'Física',
        ]);
        Asignatura::create([
            'id' => 'ASIG04',
            'nombre' => 'Inglés',
        ]);
        Asignatura::create([
            'id' => 'ASIG05',
            'nombre' => 'Geometría',
        ]);
        Asignatura::create([
            'id' => 'ASIG06',
            'nombre' => 'Estadística',
        ]);
        Asignatura::create([
            'id' => 'ASIG07',
            'nombre' => 'Biología',
        ]);
        Asignatura::create([
            'id' => 'ASIG08',
            'nombre' => 'Contabilidad',
        ]);
        Asignatura::create([
            'id' => 'ASIG09',
            'nombre' => 'Informática',
        ]);
    }
}
