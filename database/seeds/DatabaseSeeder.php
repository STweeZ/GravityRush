<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KitSeeder::class);
        $this->call(AstronauteSeeder::class);
        $this->call(BouteilleOxygeneSeeder::class);
        $this->call(VaisseauSeeder::class);
        $this->call(BidonEssenceSeeder::class);
        $this->call(BoiteMunitionSeeder::class);
        $this->call(MeteoriteSeeder::class);
        $this->call(KrakenSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
