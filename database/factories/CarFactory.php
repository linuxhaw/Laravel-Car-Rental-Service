<?php

use Faker\Generator as Faker;
use \App\Car;

$factory->define(Car::class, function (Faker $faker) {
    return [
        
        'owner_id' => 1,
        'brand' => 'toyota',
        'name' => $faker->word(),
        'type' => 'suv',
        'price' => 23223,
        'car_no' => '232323',
        'status'  => 1,
        'image1' =>'2323',
        'image2' => '2323',
        'image3' => '2323',
    ];
});
