<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'products/' . $this->faker->image('public/storage/products', 420, 260, 'product', false),
            'url' => 'promotions/' . $this->faker->image('public/storage/promotions', 1920, 600, 'promotion', false),
        ];
    }
}
