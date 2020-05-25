<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistaAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista_album', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('artista_id')->references('id')->on('artista');
            $table->foreign('album_id')->references('id')->on('album');
            $table->boolean('principal');
            $table->timestamps();

            $table->unique(['artista_id', 'album_id']);
            //TODO ¿es posible hacer un unico con un bolean=true (principal) y las claves foraneas (album) y (artista)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artista_album');
    }
}
