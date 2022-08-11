<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('league')->nullable();
            $table->string('team_a');
            $table->string('team_b');
            $table->string('tips');
            $table->decimal('odds', 4, 2);
            $table->date('date_t');
            $table->time('time_t')->nullable();
            $table->string('score_a')->default('?')->nullable();
            $table->string('score_b')->default('?')->nullable();
            $table->string('emblem');
            $table->integer('sport_id')->default(1);
            // $table->foreign('sport_id')->references('id')->on('sports');
            $table->string('sport_name');
            $table->integer('plan_id')->default(1)->unsigned();
            // $table->foreign('plan_id')->references('id')->on('plans');
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
};
