<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamePlatforms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamePlatforms', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('idPlatforms')->unsigned();
            $table->foreign('idPlatforms')->references('id')->on('platforms');

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
        Schema::dropIfExists('gamePlatforms');
    }
}
