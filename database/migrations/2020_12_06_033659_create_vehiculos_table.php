<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa','25');
            $table->string('color','25');
            $table->string('marca','25');
            $table->string('tp_vehiculo','25');
            //foring
            $table->bigInteger('fk_propietarios')->unsigned();
            $table->bigInteger('fk_conductores')->unsigned();
            //union
            $table->foreign('fk_propietarios')->references('id')->on('propietarios');
            $table->foreign('fk_conductores')->references('id')->on('conductores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
