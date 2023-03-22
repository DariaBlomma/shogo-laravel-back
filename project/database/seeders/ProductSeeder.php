<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(10)
            ->sequence(
                [
                    'url' => 'https://lookw.ru/8/828/1476173423-125.jpg',
                ],
                [
                    'url' => 'https://www.wallpaperflare.com/static/204/345/205/cat-grass-lie-down-striped-wallpaper.jpg',
                ],
                [
                    'url' => 'https://files.globalgiving.org/pfil/6054/pict_featured_jumbo.jpg?t=1652172532000',
                ],
                [
                    'url' => 'https://1dens.files.wordpress.com/2013/10/cute-cats-068.jpg',
                ],
                [
                    'url' => 'https://wiki.mininuniver.ru/images/1/10/Animal-pet-cat-mammal.jpeg',
                ],
                [
                    'url' => 'https://rare-gallery.com/uploads/posts/742052-Cats-Glance.jpg',
                ],
                [
                    'url' => 'https://cdn.mos.cms.futurecdn.net/tjvena7BNVijpzVQ3fsCPX-1920-80.jpg',
                ],
                [
                    'url' => 'https://on-desktop.com/wps/Animals___Cats_Cat_resting_079697_.jpg',
                ],
                [
                    'url' => 'https://www.wallpaperflare.com/static/141/760/46/face-animals-cat-brown-wallpaper.jpg',
                ],
                [
                    'url' => 'https://media.baamboozle.com/uploads/images/635953/1645606501_207815_url.jpeg',
                ],
            )
            ->create();
    }
}
