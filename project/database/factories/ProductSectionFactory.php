<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSectionFactory extends Factory
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
            'url' => $this->faker->imageUrl(500, 500, 'animals'),
            'name' => $this->faker->word(),
            'notice' => $this->faker->sentence(),
            'visible' => $this->faker->randomDigit(),
        ];
    }
}
