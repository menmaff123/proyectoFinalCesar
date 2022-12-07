<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares__viajes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_lugar');
            $table->unsignedBigInteger('id_viaje');
            $table->String('Notas');
            $table->timestamps();

            $table->foreign('id_lugar')->on('lugares')->references('id_lugar');
            $table->foreign('id_viaje')->on('viajes')->references('id_viaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares__viajes');
    }
};
