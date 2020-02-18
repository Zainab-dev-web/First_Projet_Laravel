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
        $this->call(FruitSeeder::class);
        $this->call(LegumeSeeder::class);
        $this->call(TestSeeder::class);
    }
}
