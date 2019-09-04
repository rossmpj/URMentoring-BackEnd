<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->string('_id', 10);
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->char('sexo', 1);
            $table->string('telefono');
            $table->string('ciudad');
            $table->date('fecha_nac');
            $table->timestamps();

            $table->primary('_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes');
    }
}
