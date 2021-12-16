<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Trademark;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trademarks = Trademark::factory(6)->create();

        foreach ($trademarks as $trademark) {
            Image::factory(1)->create([
                'imageable_id' => $trademark->id,
                'imageable_type' => Trademark::class
            ]);
        }
    }
}
