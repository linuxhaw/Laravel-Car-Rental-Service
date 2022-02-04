<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('brand');
            $table->string('name');
            $table->string('type');
            $table->integer('price');
            $table->string('car_no')->unique();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('delete_status')->default(1);
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
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
        Schema::dropIfExists('cars');
    }
}
