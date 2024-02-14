<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'email' => 'admin@admin.com',
        'name' => 'admin',
        'password' => bcrypt('secret'),
        'created_at'=> now()
    ];
});
