<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Str;

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
                'image' => 'mie-ayam.jpeg',
            ],
            [
                'name' => 'PASTEL',
                'category' => 'Food',
                'description' => 'Pastel yang renyah dan enak yang berisi 5 buah satu paket dengan harga Rp 25.000.',
                'price' => 25000,
                'image' => 'pastel.jpg',
            ],
            [
                'name' => 'PIZZA',
                'category' => 'Food',
                'description' => 'Pizza yang lezat dengan harga Rp 15.000.',
                'price' => 15000,
                'image' => 'pizza.jpg',
            ],
            [
                'name' => 'DIMSUM',
                'category' => 'Food',
                'description' => 'Dimsum yang lezat yang berisi 5 buah satu paket dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'dimsum.jpeg',
            ],
            [
                'name' => 'PISTUBAN',
                'category' => 'Food',
                'description' => 'Pistuban yang gurih dengan harga Rp 10.000.',
                'price' => 10000,
                'image' => 'pistuban.jpg',
            ],
            [
                'name' => 'MAKARONI SCHOTEL',
                'category' => 'Food',
                'description' => 'Makaroni Schotel yang lezat yang berisi 2 buah dalam satu paket dengan harga Rp 30.000.',
                'price' => 30000,
                'image' => 'makaroni-schotel.jpg',
            ],
            [
                'name' => 'RICE BOWL CHICKEN TERIYAKI',
                'category' => 'Food',
                'description' => 'Rice Bowl Chicken Teriyaki yang lezat dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'bowl-chicken-teriyaki.jpeg',
            ],
            [
                'name' => 'RICE BOWL BEEF YAKINIKU',
                'category' => 'Food',
                'description' => 'Rice Bowl Beef Yakiniku yang lezat dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'bowl-beef-yakiniku.jpeg',
            ],
            [
                'name' => 'RICE BOWL CHICKEN YAKINIKU',
                'category' => 'Food',
                'description' => 'Rice Bowl Chicken Yakiniku yang lezat dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'bowl-chicken-yakiniku.jpg',
            ],
            [
                'name' => 'POTATO BRULLE',
                'category' => 'Food',
                'description' => 'Potato Brulle yang lezat dengan harga Rp 30.000.',
                'price' => 30000,
                'image' => 'potato-brulle.jpg',
            ],
            [
                'name' => 'SUSHI MINI',
                'category' => 'Food',
                'description' => 'Sushi Mini yang lezat dengan harga Rp 25.000.',
                'price' => 25000,
                'image' => 'sushi-mini.jpeg',
            ],
            [
                'name' => 'ES CENDOL',
                'category' => 'Beverages',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 10.000.',
                'price' => 10000,
                'image' => 'es-cendol.jpeg',
            ],
            [
                'name' => 'XIMILU',
                'category' => 'Beverages',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'ximilu.jpeg',
            ],
            [
                'name' => 'ES BUKO PANDAN',
                'category' => 'Beverages',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'es-buko-pandan.jpeg',
            ],
            [
                'name' => 'DALGONA COFFEE',
                'category' => 'Beverages',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'dalgona-coffee.jpeg',
            ],
            [
                'name' => 'MANGO MILKY CHEESE',
                'category' => 'Beverages',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'mango-milky-cheese.jpeg',
            ],
            [
                'name' => 'MELON MILKY CHEESE',
                'category' => 'Beverages',
                'description' => 'Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000.',
                'price' => 20000,
                'image' => 'melon-milky-cheese.jpg',
            ],
        ];

        foreach ($menus as $menu) {
        
            // Buat slug_link berdasarkan name
            $slug = Str::slug($menu['name']);
            
            // Tambahkan slug_link ke dalam data menu
            $menu['slug_link'] = $slug;
        
            Menu::create($menu);
        }
    }
}
