<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category1 = Category::query()->find(1);
        $category1->products()->createMany([
            [
                'name' => 'Barbie',
                'price' => 30.5,
            ],
            [
                'name' => 'Spider Man',
                'price' => 15.25,
            ]
        ]);

        $category2 = Category::query()->find(2);
        $category2->products()->createMany([
            [
                'name' => 'Lake Mountain nature',
                'price' => 7.5,
            ],
            [
                'name' => 'Flowers Nature',
                'price' => 8.25,
            ]
        ]);

        $category3 = Category::query()->find(3);
        $category3->products()->createMany([
            [
                'name' => 'Apple watch',
                'price' => 400.5,
            ]
        ]);

        $category4 = Category::query()->find(4);
        $category4->products()->createMany([
            [
                'name' => 'Rose',
                'price' => 1.35,
            ]
        ]);

    }
}
