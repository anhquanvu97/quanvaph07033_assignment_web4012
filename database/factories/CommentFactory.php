<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\{Comment,Post,User};
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' =>Post::inRandomOrder()->first()->id,
        'user_id' =>User::inRandomOrder()->first()->id,
        'content' => $faker->paragraph(5),
        'is_active' => $faker->numberBetween($min = 0, $max = 1),
    ];
});
