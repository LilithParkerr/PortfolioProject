<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate(
            ['slug' => 'laravel'],
            ['name' => 'Laravel']
        );

        Category::updateOrCreate(
            ['slug' => 'styling'],
            ['name' => 'Styling']
        );

        Category::updateOrCreate(
            ['slug' => 'personal'],
            ['name' => 'Personal']
        );
    }
}
