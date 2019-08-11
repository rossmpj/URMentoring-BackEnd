<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_tutorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_titular');
            $table->string('numero_tarjeta');
            $table->string('estado');
            $table->date('fecha_expiracion_tarjeta');
            $table->timestamps();

            $table->bigInteger('id_tutoria')->unsigned();
            $table->string('id_representante', 10);
            $table->string('id_metodo_pago');

            $table->foreign('id_tutoria')
            ->references('id')->on('tutorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_representante')
            ->references('id')->on('representantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_metodo_pago')
            ->references('id')->on('metodo_pagos')
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
        Schema::dropIfExists('pago_tutorias');
    }
}
