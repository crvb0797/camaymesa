<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Promotion;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotions = Promotion::factory(6)->create();

        foreach ($promotions as $promotion) {
            Image::factory(1)->create([
                'imageable_id' => $promotion->id,
                'imageable_type' => Promotion::class
            ]);
        }
    }
}
