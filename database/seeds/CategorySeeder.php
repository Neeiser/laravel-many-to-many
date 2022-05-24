<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    
    public function run()
    {
        $cateories = [
            [
                'name' => 'Gatti'
            ],
            [
                'name' => 'Cani'
            ],
            [
                'name' => 'Sport'
            ],
            [
                'name' => 'Giochi'
            ],
            [
                'name' => 'Animali'
            ],
            [
                'name' => 'Pollame'
            ],
            [
                'name' => 'Cibo'
            ],
        ];

        foreach ($cateories as $category) {
            Category::create($category);
        }
    }
}
