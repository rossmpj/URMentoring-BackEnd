<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->string('_id', 10);
            $table->string('nombre');
            $table->string('apellido');
            $table->char('sexo', 1);
            $table->string('correo')->unique();
            $table->string('telefono', 10);
            $table->date('fecha_nac');
            $table->string('ciudad');
            $table->string('presentacion');
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
        Schema::dropIfExists('tutores');
    }
}
