<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('shop_id')->unsigned();
            $table->foreign('shop_id')->references('id')->on('shops');

            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
            
            $table->integer('code_discount');
            $table->string('price');
            $table->integer('service_discount');
            $table->dateTime('date');
            $table->boolean('accept');
            $table->boolean('status');
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
        Schema::dropIfExists('factors');
    }
}
