<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('Menus')->insert([
            ['name' => 'Mie Ayam', 'price' => 10000, 'image' => 'mie-ayam.jpeg'],
            ['name' => 'Pastel', 'price' => 7000, 'image' => 'pastel.jpg'],
            ['name' => 'Pizza', 'price' => 15000, 'image' => 'pizza.jpg'],
            ['name' => 'Dimsum', 'price' => 15000, 'image' => 'dimsum.jpeg'],
            ['name' => 'Pistuban', 'price' => 10000, 'image' => 'pistuban.jpg'],
            ['name' => 'Macaroni Schotel', 'price' => 15000, 'image' => 'makaroni-schotel.jpg'],
        ]);
    }
}
