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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->integer('plan_id')->unsigned();
            // $table->foreign('plan_id')->references('id')->on('plans');
            $table->integer('subscription_id')->unsigned();
            // $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->string('references');
            $table->string('payment_method');
            $table->string('duration')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('transactions');
    }
};
