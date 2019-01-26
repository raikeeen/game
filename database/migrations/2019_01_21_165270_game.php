<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Game extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('dateRelease');
            $table->longText('img');
            $table->longText('about');



            $table->integer('idSpecifications')->unsigned();
            $table->foreign('idSpecifications')->references('id')->on('specifications');

            $table->integer('idDevelopers')->unsigned();
            $table->foreign('idDevelopers')->references('id')->on('developers');

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
        Schema::dropIfExists('game');
    }
}
