<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rent', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('user_id');
            $table->tinyInteger('car_id');
            $table->tinyInteger('owner_id');
            $table->tinyInteger('price');
            $table->date('pickup_date');
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('car_rent');
    }
}
