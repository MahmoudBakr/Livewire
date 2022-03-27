<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->unique()->randomElement(['Egypt', 'Russia', 'Germany', 'Spain', 'England','Wales','Scotland','Northern Ireland','Southern Ireland','United Kingdom'])
        ];
    }
}
