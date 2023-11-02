<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsCategory::create([
            'name' => 'Category 1',
            'parent_id' => null,
            'lft' => 1,
            'rgt' => 6,
            'depth' => 0,
            'order' => 1,
            'status' => 'on',
        ]);

        NewsCategory::create([
            'name' => 'Category 2',
            'parent_id' => 1,
            'lft' => 1,
            'rgt' => 6,
            'depth' => 0,
            'order' => 2,
            'status' => 'on',
        ]);
    }
}
