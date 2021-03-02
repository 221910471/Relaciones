<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('titulo');
            $table->string('editorial');
            $table->int('no_pag');
            
            $table->unsignedBigInteger('ficha_id');
            $table->foreign('ficha_id')->references('id')->on('fichas');

            
            $table->unsignedBigInteger('ejemplar_id');
            $table->foreign('ejemplar_id')->references('id')->on('ejemplars');
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
        Schema::dropIfExists('libros');
    }
}
