<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return create(\App\Models\User::class)->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
