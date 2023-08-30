<?php

use App\Models\Vaisseau;
use Illuminate\Database\Seeder;

class VaisseauSeeder extends Seeder
{
    function run(){
        factory(Vaisseau::class)->create(['nom' => 'GravityRush','barreEssence' => 100.0,'barreVie' => 100.0,'nbTotalMunition' => 100]);
    }
}
