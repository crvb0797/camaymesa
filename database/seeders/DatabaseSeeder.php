<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Trademark;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('products');
        Storage::deleteDirectory('promotions');
        Storage::deleteDirectory('trademarks');
        Storage::makeDirectory('products');
        Storage::makeDirectory('promotions');
        Storage::makeDirectory('trademarks');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(TrademarkSeeder::class);
    }
}
