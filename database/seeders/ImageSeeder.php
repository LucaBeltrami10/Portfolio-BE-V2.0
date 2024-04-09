<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'project_id' => '1',
                'image' => 'https://picsum.photos/200',
            ],
            [
                'project_id' => '1',
                'image' => 'https://picsum.photos/200',
            ],
            [
                'project_id' => '2',
                'image' => 'https://picsum.photos/200',
            ]
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}