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
            '_id' => 'ASIG01',
            'nombre' => 'Ciencias Naturales',
        ]);
        Asignatura::create([
            '_id' => 'ASIG10',
            'nombre' => 'Química',
        ]);
        Asignatura::create([
            '_id' => 'ASIG02',
            'nombre' => 'Matemáticas',
        ]);
        Asignatura::create([
            '_id' => 'ASIG03',
            'nombre' => 'Física',
        ]);
        Asignatura::create([
            '_id' => 'ASIG04',
            'nombre' => 'Inglés',
        ]);
        Asignatura::create([
            '_id' => 'ASIG05',
            'nombre' => 'Geometría',
        ]);
        Asignatura::create([
            '_id' => 'ASIG06',
            'nombre' => 'Estadística',
        ]);
        Asignatura::create([
            '_id' => 'ASIG07',
            'nombre' => 'Biología',
        ]);
        Asignatura::create([
            '_id' => 'ASIG08',
            'nombre' => 'Contabilidad',
        ]);
        Asignatura::create([
            '_id' => 'ASIG09',
            'nombre' => 'Informática',
        ]);
    }
}
