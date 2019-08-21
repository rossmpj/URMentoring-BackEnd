<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacion_tutores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nivel_estudios');
            $table->string('experiencia');
            $table->string('profesion');
            $table->timestamps();
            
            $table->string('id_tutor', 10);

            $table->foreign('id_tutor')
            ->references('id')->on('tutores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formacion_tutores');
    }
}