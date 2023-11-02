<?php

namespace Database\Seeders;

use App\Models\NewsItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsItemCategory::create([
            'item_id' => 1,
            'category_id' => 1,
        ]);

        NewsItemCategory::create([
            'item_id' => 2,
            'category_id' => 2,
        ]);

        NewsItemCategory::create([
            'item_id' => 3,
            'category_id' => 2,
        ]);
    }
}
