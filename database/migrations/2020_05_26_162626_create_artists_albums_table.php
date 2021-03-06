<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('artist_id')->unsigned();
            $table->integer('album_id')->unsigned();
            $table->boolean('main');
            $table->timestamps();

            $table->unique(['artist_id', 'album_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists_albums');
    }
}
