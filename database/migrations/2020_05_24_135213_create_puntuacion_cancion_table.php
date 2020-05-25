<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntuacionCancionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntuacion_cancion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cancion_id')->references('id')->on('cancion');
            $table->tinyInteger('rate');
            $table->timestamps();

            $table->unique(['user_id', 'cancion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntuacion_cancion');
    }
}
