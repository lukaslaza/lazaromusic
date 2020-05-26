<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs_rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id');
            $table->foreign('song_id');
            $table->tinyInteger('rate');
            $table->timestamps();

            $table->unique(['user_id', 'song_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs_rating');
    }
}
