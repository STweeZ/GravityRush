<?php

use App\Models\Meteorite;
use Illuminate\Database\Seeder;

class MeteoriteSeeder extends Seeder
{
    function run(){
        factory(Meteorite::class)->create(['barreVie' => 100.0]);
    }
}
