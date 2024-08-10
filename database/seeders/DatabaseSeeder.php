<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Run the CategorySeeder first
        $this->call(CategorySeeder::class);

        // Then run the BookSeeder
        $this->call(BookSeeder::class);
    }
}
