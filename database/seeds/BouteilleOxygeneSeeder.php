<?php

use App\Models\BouteilleOxygene;
use Illuminate\Database\Seeder;

class BouteilleOxygeneSeeder extends Seeder
{
    function run(){
        //factory(BouteilleOxygene::class,1)->create();
        factory(BouteilleOxygene::class)->create(['qteOxygene' => 100.0]);
    }
}
