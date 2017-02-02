<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('season_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->dateTime('date');
            $table->integer('team_sizes')->unsigned();
            $table->integer('team1_score')->unsigned()->nullable();
            $table->integer('team2_score')->unsigned()->nullable();
            $table->bool('played')->default(false);
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
        Schema::dropIfExists('matches');
    }
}
