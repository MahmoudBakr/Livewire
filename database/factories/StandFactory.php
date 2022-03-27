<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->name(),
            'branch_id' => \App\Models\Branch::all()->random()->id,
        ];
    }
}
