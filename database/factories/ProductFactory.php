<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
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
            'slug' => Str::slug($name),
            'status' => $this->faker->randomElement([Product::BORRADOR, Product::PUBLICADO]),
            'price' => $this->faker->numberBetween(1000, 9000),
            'offer' => $this->faker->numberBetween(500, 1000),
            'width' => $this->faker->randomDigit(),
            'long' => $this->faker->randomDigit(),
            'high' => $this->faker->randomDigit(),
            'warranty' => $this->faker->randomDigit(),
            'link' => $this->faker->url(),

            'category_id' => Category::all()->random()->id,
            'user_id' => 1


        ];
    }
}
