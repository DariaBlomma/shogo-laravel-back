<?php

namespace Database\Seeders;

use App\Models\ProductSection;
use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSection::factory()
            ->count(4)
            ->sequence(
                [
                    'url' => 'https://www.aixtec-components.de/files/website_data/Bilder/Beispielbilder/AdobeStock_140202697.jpg',
                    'name' => 'electronics',
                    'notice' => 'computers, mobile phones, etc',
                ],
                [
                    'url' => 'https://lachica.ru/wp-content/uploads/2022/10/185d71bd21b4175bb40af684a8f6edd8.jpeg',
                    'name' => 'furniture',
                    'notice' => 'doors, chairs, tables, etc',
                ],
                [
                    'url' => 'https://oir.mobi/uploads/posts/2021-03/1616606665_26-p-fon-odezhda-28.jpg',
                    'name' => 'clothes',
                    'notice' => 'casual, tracking, business',
                ],
                [
                    'url' => 'https://mobimg.b-cdn.net/v3/fetch/b0/b0c1455423885ff32ff45ee569997447.jpeg',
                    'name' => 'animals',
                    'notice' => 'cats, dogs, birds, hamsters',
                ]
            )
            ->create();
    }
}
