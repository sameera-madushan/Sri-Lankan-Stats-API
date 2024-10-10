<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProvinceSeeder::class,
            DistrictSeeder::class,
            CitySeeder::class,
            PostalCodeSeeder::class,
            PollingDistrictSeeder::class,
            PollingDivisionSeeder::class,
            DistrictMapSeeder::class,
            ProvinceMapSeeder::class,
        ]);
    }
}
