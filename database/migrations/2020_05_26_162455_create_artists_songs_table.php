<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('artist_id');
            $table->foreign('song_id');
            $table->boolean('main');
            $table->timestamps();

            $table->unique(['artist_id','song_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists_songs');
    }
}
