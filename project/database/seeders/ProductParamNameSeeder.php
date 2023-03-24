<?php

namespace Database\Seeders;

use App\Models\ProductParamName;
use Illuminate\Database\Seeder;

class ProductParamNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductParamName::factory()
            ->count(4)
            ->sequence(
                [
                    'name' => 'for tracking',
                ],
                [
                    'name' => 'with fur',
                ],
                [
                    'name' => 'made of wood',
                ],
                [
                    'name' => 'color',
                ]
            )
            ->create();
    }
}
