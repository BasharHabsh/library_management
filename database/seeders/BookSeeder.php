<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        if ($categories->count() == 0) {
            $this->call(CategorySeeder::class);
            $categories = Category::all();
        }

        Book::factory()->count(50)->make()->each(function ($book) use ($categories) {
            $book->category_id = $categories->random()->id;
            $book->save();
        });
    }
}
