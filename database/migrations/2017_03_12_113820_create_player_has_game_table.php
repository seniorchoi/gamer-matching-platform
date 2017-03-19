<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerHasGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_has_game', function (Blueprint $table) {
            $table->integer('player_id');
            $table->integer('game_id');
            $table->string('play_time_per_week')->nullable();
            $table->timestamp('last_played_at')->nullable();
            $table->float('remote_rating')->nullable();
            $table->timestamps();

            $table->primary(['player_id', 'game_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_has_game');
    }
}
