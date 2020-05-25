<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            //TODO preguntar que es la opcion extra de 'Precision' y la diferencia con date() y si vale la pena usar timestamps()
            $table->dateTime('release_at');
            $table->timestamps();

            //TODO pueden repetirse los nombres de las playlist para un artista?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
}
