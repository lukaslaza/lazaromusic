<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistaCancionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista_cancion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('artista_id')->references('id')->on('artista');
            $table->foreign('cancion_id')->references('id')->on('cancion');
            $table->boolean('principal');
            $table->timestamps();

            $table->unique(['artista_id','cancion_id']);
            //TODO PREGUNTAR si es posible hacer un unico con un bolean=true y las claves foraneas (cancion) y (artista)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artista_cancion');
    }
}
