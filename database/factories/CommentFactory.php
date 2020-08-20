<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'post_id' => $faker->randomDigit(10)
    ];
});
