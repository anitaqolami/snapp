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

            $table->string('user_id');
            $table->string('city')->default('mashhad');
            $table->string('street_primary');
            $table->string('street_secondary');
            $table->string('C_address');
            $table->string('service_id');
            $table->string('content');
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
