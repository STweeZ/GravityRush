<?php


use App\Models\BouteilleOxygene;
use Faker\Generator as Faker;


$factory->define(BouteilleOxygene::class, function (Faker $faker) {
    $createAt = $faker->dateTimeInInterval(
        $startDate = '-6 months',
        $interval = '+ 180 days',
        $timezone = date_default_timezone_get()
    );
    return [
        'qteOxygene' => $faker->randomFloat(1, 0, 100),
        'created_at' => $createAt,
        'updated_at' => $faker->dateTimeInInterval(
            $startDate = $createAt,
            $interval = $createAt->diff(new DateTime('now'))->format("%R%a days"),
            $timezone = date_default_timezone_get()
        ),
    ];
}
);
