<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Technology',
                'description' => 'All about the latest in tech',

            ],
            [
                'title' => 'Education',
                'description' => 'Resources for learning and development',

            ],
            [
                'title' => 'Health & Wellness',
                'description' => 'Tips and advice on health and fitness',

            ],
        ];

        // Insert each category into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
