<?php

use App\Models\BoiteMunition;
use Illuminate\Database\Seeder;

class BoiteMunitionSeeder extends Seeder
{
    function run(){
        factory(BoiteMunition::class)->create(['nbMunition' => 100]);
    }
}
