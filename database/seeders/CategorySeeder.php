<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Programming',
            'Math',
            'Science',
            'History',
            'Literature',
            'Art',
            'Physics',
            'Chemistry',
            'Biology',
            'Geography',
        ];

        foreach ($categories as $categoryName) {
            Category::create(['name' => $categoryName]);
        }
    }
}
