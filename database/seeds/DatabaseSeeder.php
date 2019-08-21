<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AsignaturaSeeder::class);
        $this->call(RepresentanteSeeder::class);
        $this->call(TutorSeeder::class);
        $this->call(MetodoPagoSeeder::class);
        $this->call(FormacionTutorSeeder::class);
        $this->call(AsignaturaTutorSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(CalificacionSeeder::class);
        $this->call(TutoriaSeeder::class);
        $this->call(PagoTutoriaSeeder::class);
        $this->call(DocumentosRefuerzoSeeder::class);
    }
}
