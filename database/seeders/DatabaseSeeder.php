<?php

namespace Database\Seeders;

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
        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            AreaSeeder::class,
            CompanySeeder::class,
            BrandSeeder::class,
            BranchSeeder::class,
            StandSeeder::class,
        ]);
    }
}
