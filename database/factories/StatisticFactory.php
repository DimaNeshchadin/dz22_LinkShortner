<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Statistic::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'link_id' => DB::table('links')->inRandomOrder()->limit(1)->get()->first()->id,
        'ip' => $faker->ipv4,
        'country_name' => $faker->country,
        'country_code' => $faker->countryCode,
        'city_name' => $faker->city,
        'user_agent' => $faker->userAgent
    ];
});
