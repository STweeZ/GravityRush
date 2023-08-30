<?php

use App\Models\Kit;
use Illuminate\Database\Seeder;

class KitSeeder extends Seeder
{
    public function run(){
        factory(Kit::class,5)->create();
    }
}
