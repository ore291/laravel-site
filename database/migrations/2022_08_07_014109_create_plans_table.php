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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('n_weekly')->default(0)->nullable();
            $table->integer('n_per_month')->default(0);
            $table->integer('n_per_6months')->default(0);
            $table->integer('n_per_year')->default(0);
            $table->integer('d_per_month')->default(0);
            $table->integer('d_per_6months')->default(0)->nullable();
            $table->integer('d_per_year')->default(0)->nullable();
            $table->integer('k_per_month')->default(0)->nullable();
            $table->integer('k_per_6months')->default(0)->nullable();
            $table->integer('k_per_year')->default(0)->nullable();
            $table->tinyInteger('n_only')->default(0)->nullable();
            $table->tinyInteger('sms_plan')->default(0);    
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
        Schema::dropIfExists('plans');
    }
};
