<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GenreGame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genreGame', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('idGenre')->unsigned();
            $table->foreign('idGenre')->references('id')->on('genre');

            $table->integer('idGame')->unsigned();
            $table->foreign('idGame')->references('id')->on('game');

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
        Schema::dropIfExists('genreGame');
    }
}
