<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->tinyInteger('team_id')->unsigned();
            $table->integer('goals')->unsigned();
            $table->integer('assists')->unsigned();
            $table->boolean('yellow_card')->default(false);
            $table->boolean('red_card')->default(false);
            $table->integer('passes')->unsigned();
            $table->integer('tackles')->unsigned();
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
        Schema::dropIfExists('player_matches');
    }
}
