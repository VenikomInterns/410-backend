<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        Category::query()->create([
            'name'=> 'Toys'
        ]);
        Category::query()->create([
            'name'=> 'Pictures'
        ]);
        Category::query()->create([
            'name'=> 'Technology'
        ]);
        Category::query()->create([
            'name'=> 'Plants'
        ]);
        Category::query()->create([
            'name'=> 'Food'
        ]);
    }
}
