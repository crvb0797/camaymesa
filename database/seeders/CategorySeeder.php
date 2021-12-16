<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ofertas',
            'slug' => 'Ofertas'
        ]);

        Category::create([
            'name' => 'Camas',
            'slug' => 'Camas'
        ]);

        Category::create([
            'name' => 'Muebles',
            'slug' => 'Muebles'
        ]);
    }
}
