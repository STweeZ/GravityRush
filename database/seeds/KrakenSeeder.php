<?php

use App\Models\Kraken;
use Illuminate\Database\Seeder;

class KrakenSeeder extends Seeder
{
    function run(){
        factory(Kraken::class)->create(['barreVie' => 100.0]);
    }
}
