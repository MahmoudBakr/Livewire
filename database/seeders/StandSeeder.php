<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Stand::factory(10)->create();
    }
}
