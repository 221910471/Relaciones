<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camions', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('tipo');
            $table->int('potencia');
            
            $table->unsignedBigInteger('camionero_id');
            $table->foreign('camionero_id')->references('id')->on('camioneros');

            $table->unsignedBigInteger('paquete_id');
            $table->foreign('paquete_id')->references('id')->on('paquetes');
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
        Schema::dropIfExists('camions');
    }
}
