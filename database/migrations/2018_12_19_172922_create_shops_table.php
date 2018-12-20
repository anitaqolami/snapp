<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {

            $table->increments('id');

            $table->string('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('map_id')->unsigned();
            $table->foreign('map_id')->references('id')->on('maps')->onDelete('cascade');

            $table->string('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');

            $table->string('city')->default('mashhad');
            $table->string('content');

            $table->text('image');

            $table->boolean('sex');
            $table->integer('bill');//صورت حساب
            $table->dateTime('Checkout_date');//تاریخ تسویه حساب
            $table->integer('rate');
            $table->boolean('active');
            $table->boolean('visible');

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
        Schema::dropIfExists('shops');
    }
}
