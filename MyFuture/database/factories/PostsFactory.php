<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$users = User::all();

$factory->define(Post::class, function (Faker $faker) use ($users) {
    return [
        "image" => $faker->word,
        "description" => $faker->realText(50),
        "user_id" => $users->shuffle()[0]->id
    ];
});
