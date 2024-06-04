<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name' => 'MIE AYAM',
                'category' => 'Food',
                'description' => 'Mie Ayam yang lezat dengan harga Rp 15.000.',
                'price' => 15000,
                'image_path' => 'assets/img/mie-ayam.jpeg',
            ],
            [
                'name' => 'PASTEL',
                'category' => 'Food',
                'description' => 'Pastel yang renyah dan enak yang berisi 5 buah satu paket dengan harga Rp 25.000.',
                'price' => 25000,
                'image_path' => 'assets/img/pastel.jpg',
            ],
            [
                'name' => 'PIZZA',
                'category' => 'Food',
                'description' => 'Pizza yang lezat dengan harga Rp 15.000.',
                'price' => 15000,
                'image_path' => 'assets/img/pizza.jpg',
            ],
            [
                'name' => 'DIMSUM',
                'category' => 'Food',
                'description' => 'Dimsum yang lezat yang berisi 5 buah satu paket dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/dimsum.jpeg',
            ],
            [
                'name' => 'PISTUBAN',
                'category' => 'Food',
                'description' => 'Pistuban yang gurih dengan harga Rp 10.000.',
                'price' => 10000,
                'image_path' => 'assets/img/pistuban.jpg',
            ],
            [
                'name' => 'MAKARONI SCHOTEL',
                'category' => 'Food',
                'description' => 'Makaroni Schotel yang lezat yang berisi 2 buah dalam satu paket dengan harga Rp 30.000.',
                'price' => 30000,
                'image_path' => 'assets/img/makaroni-schotel.jpg',
            ],
            [
                'name' => 'RICE BOWL CHICKEN TERIYAKI',
                'category' => 'Food',
                'description' => 'Rice Bowl Chicken Teriyaki yang lezat dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/bowl-chicken-teriyaki.jpeg',
            ],
            [
                'name' => 'RICE BOWL BEEF YAKINIKU',
                'category' => 'Food',
                'description' => 'Rice Bowl Beef Yakiniku yang lezat dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/bowl-beef-yakiniku.jpeg',
            ],
            [
                'name' => 'RICE BOWL CHICKEN YAKINIKU',
                'category' => 'Food',
                'description' => 'Rice Bowl Chicken Yakiniku yang lezat dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/bowl-chicken-yakiniku.jpg',
            ],
            [
                'name' => 'POTATO BRULLE',
                'category' => 'Food',
                'description' => 'Potato Brulle yang lezat dengan harga Rp 30.000.',
                'price' => 30000,
                'image_path' => 'assets/img/potato-brulle.jpg',
            ],
            [
                'name' => 'SUSHI MINI',
                'category' => 'Food',
                'description' => 'Sushi Mini yang lezat dengan harga Rp 25.000.',
                'price' => 25000,
                'image_path' => 'assets/img/sushi-mini.jpeg',
            ],
            [
                'name' => 'ES CENDOL',
                'category' => 'Beverage',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 10.000.',
                'price' => 10000,
                'image_path' => 'assets/img/es-cendol.jpeg',
            ],
            [
                'name' => 'XIMILU',
                'category' => 'Beverage',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/ximilu.jpeg',
            ],
            [
                'name' => 'ES BUKO PANDAN',
                'category' => 'Beverage',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/es-buko-pandan.jpeg',
            ],
            [
                'name' => 'DALGONA COFFEE',
                'category' => 'Beverage',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/dalgona-coffee.jpeg',
            ],
            [
                'name' => 'MANGO MILKY CHEESE',
                'category' => 'Beverage',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/mango-milky-cheese.jpeg',
            ],
            [
                'name' => 'MELON MILKY CHEESE',
                'category' => 'Beverage',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image_path' => 'assets/img/melon-milky-cheese.jpg',
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
