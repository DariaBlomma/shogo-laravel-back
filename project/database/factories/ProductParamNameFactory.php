<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductParamNameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position' => $this->faker->numberBetween(1, 10),
            'visible' => $this->faker->randomDigit(),
            'name' => $this->faker->word(),
        ];
    }
}
