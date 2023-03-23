<?php

namespace Database\Seeders;

use App\Models\ProductParam;
use Illuminate\Database\Seeder;

class ProductParamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductParam::factory()
            ->count(4)
            ->create();
    }
}
