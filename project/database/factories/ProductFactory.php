<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'articul' => $this->faker->bothify('?????-#####'),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'price_old' => $this->faker->randomFloat(2, 1, 1000),
            'currency_id' => $this->faker->numberBetween(1, 5000),
            'notice' => $this->faker->sentence(),
            'content' => $this->faker->sentence(20),
            'visible' => $this->faker->randomDigit(),
        ];
    }
}
