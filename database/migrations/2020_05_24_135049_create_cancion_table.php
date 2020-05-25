<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->foreign('album_id')->references('id')->on('album');
            $table->string('archive_url');
            $table->foreign('genero_id')->references('id')->on('genero');
            $table->boolean('explicit')->default(true);
            $table->timestamps();

            $table->unique(['name', 'album_id', 'archive_url']);//TODO ¿correcto?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancion');
    }
}
