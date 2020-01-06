<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs');
            $table->bigInteger('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_artists');
    }
}
