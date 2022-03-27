<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city_id = 0;
        return [
            'name'  => $this->faker->name(),
            'city_id' => \App\Models\City::all()->random()->id,
        ];
    }
}
