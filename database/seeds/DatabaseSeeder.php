<?php

use Illuminate\Database\Seeder;
use HousesTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HousesTableSeeder::class);
    }
}
