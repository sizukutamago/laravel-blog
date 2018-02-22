<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return create(App\Models\User::class)->id;
        },
        'article_id' => function () {
            return create(\App\Models\Article::class)->id;
        },
        'body' => $faker->sentence()
    ];
});
