<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('alias');
            $table->dateTime('born_date'); //TODO preguntar que es la opcion extra de 'Precision' y la diferencia con date() y si vale la pena usar timestamps()
            $table->string('nacionality');
            $table->text('description');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();

            //TODO como hacer que un usuario solo pueda ser de un artista ¿unico?

            $table->unique(['nacionality', 'alias']);//TODO esto es correcto?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artista');
    }
}
