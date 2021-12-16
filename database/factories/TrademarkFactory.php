<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrademarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word(20);
        return [
            'name' => $name,
            'user_id' => 1
        ];
    }
}
