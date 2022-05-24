<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    
    public function run()
    {
        $cateories = [
            [
                'categories_name' => 'Gatti'
            ],
            [
                'categories_name' => 'Cani'
            ],
            [
                'categories_name' => 'Sport'
            ],
            [
                'categories_name' => 'Giochi'
            ],
            [
                'categories_name' => 'Animali'
            ],
            [
                'categories_name' => 'Pollame'
            ],
            [
                'categories_name' => 'Cibo'
            ],
        ];

        foreach ($cateories as $category) {
            Category::create($category);
        }
    }
}
