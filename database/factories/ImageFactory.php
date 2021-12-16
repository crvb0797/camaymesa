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
        $url = $this->faker->randomElement(['products/' . $this->faker->image('public/storage/products', 420, 260, 'product', false), 'promotions/' . $this->faker->image('public/storage/promotions', 1440, 608, 'promotion', false), 'trademarks/' . $this->faker->image('public/storage/trademarks', 250, 246, 'trademark', false)]);
        return [
            'url' => $url
        ];
    }
}
