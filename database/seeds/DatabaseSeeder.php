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
        $this->call(CallmeTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(CarModelsTableSeeder::class);
    }
}
