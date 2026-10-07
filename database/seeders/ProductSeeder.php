<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('products')->truncate();

        DB::table('products')->insert([
            [
                'name' => 'RGB Mechanical Keyboard',
                'price' => 59.99,
                'category' => 'Peripherals',
                'description' => 'Mechanical keyboard with RGB lighting and blue switches.'
            ],
            [
                'name' => 'Gaming Mouse',
                'price' => 34.99,
                'category' => 'Peripherals',
                'description' => 'Ergonomic gaming mouse with a high-precision sensor.'
            ],
            [
                'name' => '24-inch Monitor',
                'price' => 149.99,
                'category' => 'Monitors',
                'description' => '24-inch Full HD monitor with a 165 Hz refresh rate.'
            ],
            [
                'name' => 'Wireless Headphones',
                'price' => 79.99,
                'category' => 'Audio',
                'description' => 'Wireless headphones with active noise cancellation.'
            ],
            [
                'name' => 'Full HD Webcam',
                'price' => 44.99,
                'category' => 'Accessories',
                'description' => 'Full HD 1080p webcam suitable for video calls and streaming.'
            ],
            [
                'name' => 'XXL Gaming Mouse Pad',
                'price' => 24.99,
                'category' => 'Accessories',
                'description' => 'Large gaming mouse pad with a smooth surface optimized for gaming.'
            ],
            [
                'name' => '1TB NVMe SSD',
                'price' => 89.99,
                'category' => 'Storage',
                'description' => '1TB NVMe SSD with high read and write speeds.'
            ],
            [
                'name' => '16GB DDR5 RAM',
                'price' => 54.99,
                'category' => 'Components',
                'description' => '16GB DDR5 memory module for desktop computers.'
            ],
            [
                'name' => 'RTX 4060 Graphics Card',
                'price' => 329.99,
                'category' => 'Components',
                'description' => 'NVIDIA GeForce RTX 4060 graphics card for Full HD gaming.'
            ],
            [
                'name' => '650W Power Supply',
                'price' => 69.99,
                'category' => 'Components',
                'description' => '650W power supply with an 80 Plus Bronze certification.'
            ],
            [
                'name' => 'Gaming Chair',
                'price' => 179.99,
                'category' => 'Furniture',
                'description' => 'Ergonomic gaming chair with adjustable armrests.'
            ],
            [
                'name' => 'USB-C Hub',
                'price' => 29.99,
                'category' => 'Accessories',
                'description' => 'USB-C hub with USB ports, HDMI and a card reader.'
            ]
        ]);
    }
}
