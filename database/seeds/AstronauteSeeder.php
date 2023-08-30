<?php

use Illuminate\Database\Seeder;
use App\Models\Astronaute;

class AstronauteSeeder extends Seeder
{
    function run(){
        factory(Astronaute::class)->create(['nom' => 'Toto','barreOxygene' => 100.0,'barreVie' => 100.0]);
    }
}
