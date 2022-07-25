<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->bigInteger('fixture_id')->unique();
            $table->string('start_time');
            $table->string('competition');
            $table->integer('leagueId')->default(0);;
            $table->string('country');
            $table->string('team1');
            $table->string('team2');
            $table->string('prediction_type');
            $table->string('subcribers');
            $table->string('odds');
            $table->string('ht_score')->default('_-_');
            $table->string('final_score')->default('_-_');;
            $table->string('matchLive')->default('0');
            $table->string('gameMinute')->default('NOT PLAYED');;
            $table->string('status');
            $table->date('date');
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
        Schema::dropIfExists('predictions');
    }
}
