<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancionListaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancion_lista', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('lista_id')->references('id')->on('lista_reproduccion');
            $table->foreign('cancion_id')->references('id')->on('cancion');
            $table->dateTime('created_at');//TODO es necesario teniendo el campo de abajo?
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
        Schema::dropIfExists('cancion_lista');
    }
}
