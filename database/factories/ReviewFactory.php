<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use App\Model\Product;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Review::class, function (Faker\Generator $faker) {

    return [
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' =>$faker->numberBetween(0,5) ,
        'product_id' => function() {
            return Product::all()->random();
        } 
    ];
});
