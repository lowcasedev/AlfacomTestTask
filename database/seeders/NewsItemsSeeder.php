<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsItem::create([
            'name' => 'User 1',
            'avatar' => 'image1.png',
            'description' => 'if you are reading this, you`re cool ^-^',
            'event_date' => '2023-11-03',
            'status' => 'on',
        ]);

        NewsItem::create([
            'name' => 'User 2',
            'avatar' => 'image2.png',
            'description' => 'i like apples, and you? ^-^',
            'event_date' => '2023-11-03',
            'status' => 'on',
        ]);

        NewsItem::create([
            'name' => 'User 3',
            'avatar' => 'image3.png',
            'description' => 'what you like more, cats or dogs? ^-^',
            'event_date' => '2023-11-03',
            'status' => 'on',
        ]);
    }
}
