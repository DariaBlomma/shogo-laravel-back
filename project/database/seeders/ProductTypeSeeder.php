<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::factory()
            ->count(4)
            ->sequence(
                [
                    'url' => 'https://www.collinsdictionary.com/images/full/mobilephone_103792316.jpg',
                    'name' => 'mobile phone',
                ],
                [
                    'url' => 'https://mebhome.ru/imgup/f16700___1965_.jpg',
                    'name' => 'desk',
                ],
                [
                    'url' => 'https://meindl.de/wp-content/uploads/2016/05/image-schuh-identity.jpg',
                    'name' => 'tracking shoes',
                ],
                [
                    'url' => 'https://lookw.ru/1/523/1402242672-oboi-1920h1080.-siamchiki-1.jpg',
                    'name' =>  'kitten',
                ]
            )
            ->create();
    }
}
