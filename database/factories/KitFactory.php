<?php

use App\Models\Kit;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Kit1;




$factory->define(Kit::class, function (Faker $faker) {
        $createAt = $faker->dateTimeInInterval(
            $startDate = '-6 months',
            $interval = '+ 180 days',
            $timezone = date_default_timezone_get()
        );
        return [
            'nomKit' => $faker->word(),
            'created_at' => $createAt,
            'updated_at' => $faker->dateTimeInInterval(
                $startDate = $createAt,
                $interval = $createAt->diff(new DateTime('now'))->format("%R%a days"),
                $timezone = date_default_timezone_get()
            ),
        ];
    }
);
