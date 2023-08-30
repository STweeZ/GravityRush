<?php

use App\Models\BidonEssence;
use Illuminate\Database\Seeder;

class BidonEssenceSeeder extends Seeder
{
    function run(){
        factory(BidonEssence::class)->create(['qteEssence' => 100.0]);
    }
}
