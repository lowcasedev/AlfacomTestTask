<?php

namespace Database\Seeders;

use App\Models\NewsImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsImage::create([
            'news_id' => 1,
            'name' => 'Image 1',
            'type' => 'png',
            'filename' => 'image1.png',
            'order' => 1,
            'status' => 'on',
        ]);

        NewsImage::create([
            'news_id' => 1,
            'name' => 'Image 2',
            'type' => 'png',
            'filename' => 'image2.png',
            'order' => 2,
            'status' => 'on',
        ]);
    }
}
